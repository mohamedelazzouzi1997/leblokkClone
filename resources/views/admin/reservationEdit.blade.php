@extends('layouts.admin')

@section('title')
    Reservation Details
@endsection


@section('befor-style')
    <link rel="stylesheet" href="{{ asset('css/timepicker.css') }}">
@endsection
@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">
@endsection

@section('content')
    <div class="py-12 px-6 md:px-28">
        <div class="flex justify-center items-center ">
            <div class="text-center w-1/3 shadow-xl rounded-lg bg-white py-2 px-3">
                {{-- <h6 class="bg-blue-900 px-3 py-2">Reservation Edit</h6> --}}
                <form action="{{ route('reservation.update', $res->id) }}" method="post" class="form-group">
                    @csrf
                    @method('put')
                    <label for="name" class="text-black italic font-extrabold w-full text-start mt-4">Nom
                        Complet</label>
                    <input name="name" class="shadow-md form-control" value="{{ $res->full_name }}" type="text">
                    <label for="email" class="text-black italic font-extrabold w-full text-start mt-4">Email</label>
                    <input name="email" class="shadow-md form-control" value="{{ $res->email }}" type="text">
                    <label for="phone" class="text-black italic font-extrabold w-full text-start mt-4">Téléphone</label>
                    <input name="phone" class="shadow-md form-control" value="{{ $res->phone }}" type="text">
                    <label for="date" class="text-black italic font-extrabold w-full text-start mt-4">Date</label>
                    <input name="date" class="shadow-md form-control" datepicker datepicker-autohide
                        value="{{ $res->date->format('m/d/Y') }}" type="text">
                    <label for="time" class="text-black italic font-extrabold w-full text-start mt-4">Time</label>
                    <input name="time" id="timepicker" class="shadow-md form-control" value="{{ $res->time }}"
                        type="text">
                    <label for="number_of_persons" class="text-black italic font-extrabold w-full text-start mt-4">Nombre
                        personne</label>
                    <select name="number_of_persons" class="rounded border border-black shadow-md ms form-control"
                        data-placeholder="Select">
                        @for ($i = 1; $i <= 20; $i++)
                            <option @if ($res->number_of_persons == $i) selected @endif value="{{ $i }}">
                                {{ $i }} Personne</option>
                        @endfor
                    </select>
                    <label for="status" class="text-black italic font-extrabold w-full text-start mt-4">Status</label>
                    <select name="status" class=" rounded shadow-md ms form-control" data-placeholder="Select">

                        <option @if ($res->status == 'pending') selected @endif value="pending">
                            Pending</option>
                        <option @if ($res->status == 'confirmed') selected @endif value="confirmed">
                            Confirmed</option>
                        <option @if ($res->status == 'declined') selected @endif value="declined">
                            Closed</option>
                    </select>
                    <div class="text-start mt-4 space-x-4">

                        <input type="checkbox" name="send_email" class="text-blue-900 rounded-md"><label for="status"
                            class="text-black italic font-extrabold align-sub text-start "> Send
                            Notification</label>
                    </div>
                    <button type="submit" class="btn bg-blue-900 btn-primary btn-block">Edit Booking</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('toaster/toaster.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    <script src="{{ asset('js/timepicker.js') }}"></script>

    <script>
        const ToasterOptions = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        $('#timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '8pm',
            maxTime: '11:30pm',
            // defaultTime: '8pm',
            startTime: '08:00pm',
            dynamic: false,
            dropdown: true,
            scrollbar: true,
        });
    </script>
    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
            toastr.options = ToasterOptions;
        </script>
    @endif
@endsection
