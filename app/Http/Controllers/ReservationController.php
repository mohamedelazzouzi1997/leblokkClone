<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
// use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Resevation;
use Illuminate\Http\Request;
use App\Mail\ReservationEmail;
use App\Exports\ReservationExport;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ReservationController extends Controller
{
    //
    public function index(){
        $reservations = Resevation::latest('id')->get();
        // dd($reservations);
        return view('admin.dashboard',compact('reservations'));
    }

    public function show($id){
        $res = Resevation::findOrfail($id);

        return view('admin.reservationDetails',compact('res'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required' ,
            'email'=> 'required' ,
            'phone'=> 'required' ,
            'date'=> 'required' ,
            'time'=> 'required' ,
            'number_of_persons'=> 'required' ,
        ]);

        // dd(Carbon::parse($request->date)->format('Y-m-d'));
        $origin_array = [
            'tk' => 'tiktok',
            'in' => 'instagrame',
            'fb' => 'facebook',
            'yt' => 'youtube',
        ];
        $origin_to_store = 'direct';
        foreach($origin_array as $key => $value){
            if($request->origin == $key){
                $origin_to_store = $value;
                break;
            }
        }


        $res = Resevation::create([
            'full_name'=> $request->name ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
            'date'=> Carbon::parse($request->date)->format('Y-m-d') ,
            'time'=> $request->time ,
            'number_of_persons'=> $request->number_of_persons ,
            'message'=> $request->message ,
            'origin'=> $origin_to_store,
        ]);
        \session()->flash('success','Merci votre demande de réservation est en attente de confirmation. Les mises à jour seront envoyées à l\'adresse e-mail que vous avez fournie.');
            Mail::to($request->email)->send(new ReservationEmail($res,'reserve','no message'));
        return back();
    }

    public function reject(Request $request,$id){

        $res = Resevation::findOrfail($id);
        $emailMessage = $request->emailMessage;

        $reservation_mail = $res->email;

        $res->update([
            'status' => 'declined'
        ]);

        if($res)
            Mail::to($reservation_mail)->send(new ReservationEmail($res,'reject',$emailMessage ));

        session()->flash('warning','Rservation a été Rejecté avec succée');
        return back();
    }

    public function confirm(Request $request,$id){

        $res = Resevation::findOrfail($id);
        $emailMessage = $request->emailMessage;

        $reservation_mail = $res->email;


        $res->update([
            'status' => 'confirmed'
        ]);

        if($res)
            Mail::to($reservation_mail)->send(new ReservationEmail($res,'confirm',$emailMessage));

        session()->flash('success','Rservation a été Confirmé avec succée');
        return back();
    }

    public function delete(Request $request,$id){
        $res = Resevation::findOrfail($id);

        $emailMessage = $request->emailMessage;

        $reservation_mail = $res->email;


        $res->delete();

        if($res)
            Mail::to($reservation_mail)->send(new ReservationEmail($res,'reject',$emailMessage ));

        session()->flash('delete','Rservation a été supprimé avec succée');
        return to_route('dashboard');
    }

    public function destroy(Request $request){
        // dd($request->bookings);
        $res = Resevation::whereIn('id',$request->bookings)->delete();

        session()->flash('delete','Rservation a été supprimé avec succée');
        return to_route('dashboard');
    }


    public function edit($id){
        $res = Resevation::findOrfail($id);

        return view('admin.reservationEdit',compact('res'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=> 'required' ,
            'email'=> 'required' ,
            'phone'=> 'required' ,
            'date'=> 'required' ,
            'time'=> 'required' ,
            'status'=> 'required' ,
            'number_of_persons'=> 'required' ,
        ]);
        if($request->status == 'declined'){
            $status = 'reject';
        }elseif($request->status == 'confirmed'){
            $status = 'confirm';

        }else{
            $status = 'pending';
        }
        $emailMessage = '';
        $res = Resevation::findOrfail($id);

       $res->update([
            'full_name'=> $request->name ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
            'date'=> Carbon::parse($request->date)->format('Y-m-d') ,
            'time'=> $request->time,
            'status'=> $request->status,
            'number_of_persons'=> $request->number_of_persons,
        ]);
        if($request->has('send_email'))
            Mail::to($request->email)->send(new ReservationEmail($res,$status,$emailMessage ));


        session()->flash('success','La reservation a été modifier.');
        return back();
    }

    public function export(Request $request){

        if($request->date== 'upcoming' ){

            $date = 'upcoming';
            $reservations = Resevation::whereDate('date','>',Carbon::today())->whereIn('status',$request->etat)->get(['id','full_name','email','phone','date','time','message','status']);
        }elseif($request->date== 'range'){
            $date = 'range';

            $Filter_Date_From = $request->start ?? Carbon::now();
            $Filter_Date_To = $request->end ?? Carbon::now();

            $reservations = Resevation::whereDate('date', '>=', $Filter_Date_From)
                                        ->whereDate('date', '<=', $Filter_Date_To)
                                        ->whereIn('status',$request->etat)->get(['id','full_name','email','phone','date','time','message','status']);

        }elseif($request->date== 'today'){
            $date = 'today';
            $reservations = Resevation::whereDate('date',Carbon::today())->whereIn('status',$request->etat)->get(['id','full_name','email','phone','date','time','message','status']);

            // $reservations = Resevation::whereDate('date',Carbon::today())->whereIn('status',$request->etat)->get(['id','full_name','email','phone','date','time','message','status']);
        }

        if($request->file_type == 'pdf'){
            $pdf = Pdf::loadView('pdf.reservation', [
                'reservations'=> $reservations,
                'date' => $date
            ]);
            return $pdf->download($date.'_Reservation.pdf');
        }else{
            return Excel::download(new ReservationExport($reservations), $date.'_Reservation.xlsx');

        }

    }
}