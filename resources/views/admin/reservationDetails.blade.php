@extends('layouts.admin')

@section('title')
    Reservation Details
@endsection


@section('befor-style')
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">
@endsection

@section('content')
    <div class="py-12 px-6 md:px-28">
        <div class="flex justify-center items-center ">
            <div
                class="text-center w-1/3 @if ($res->status == 'declined') bg-orange-200
                                @elseif($res->status == 'confirmed')
                                bg-blue-200
                                @else
                                    bg-red-200 @endif shadow-xl rounded-lg  py-2 px-3">
                <h6 class="bg-blue-900 px-3 py-2 text-white">{{ $res->date->format('F d, Y') . ' ' . $res->time }}</h6>
                <div class="my-2">
                    <span class="mx-6 block md:inline">
                        @if ($res->status == 'pending')
                            <a type="button" data-toggle="modal" data-target="#emailConfirmModal"
                                class="py-1 float-left text-white badge bg-green-400 badge-success px-1   rounded-md">Confirme</a>
                            <a type="button" data-toggle="modal" data-target="#emailRejectModal"
                                class="py-1 float-left text-white badge bg-yellow-400 badge-warning px-1 mx-2 rounded-md">Reject</a>
                        @elseif($res->status == 'confirmed')
                            <a type="button" data-toggle="modal" data-target="#emailRejectModal"
                                class="py-1 float-left text-white bg-yellow-400 badge badge-warning px-1  rounded-md">Reject</a>
                        @elseif($res->status == 'declined')
                            <a type="button" data-toggle="modal" data-target="#emailConfirmModal"
                                class="py-1 float-left text-white bg-green-400 badge badge-success px-1 rounded-md">Confirme</a>
                        @endif
                        <a type="button" data-toggle="modal" data-target="#emailDeletemModal"
                            class="py-1 float-right px-1 text-white bg-red-400 badge badge-danger rounded-md">Delete</a>
                        <a href="{{ route('reservation.edit', $res->id) }}"
                            class="py-1 float-right px-1 text-white bg-blue-400 badge badge-primary rounded-md mx-2">EDIT</a>
                    </span>
                </div>
                <div class="form-group ">
                    <label for="name" class="text-black italic font-extrabold w-full text-start mt-4">Message</label>
                    <textarea class="form-control border border-black shadow-md" disabled cols="30" rows="3">{{ $res->message }}</textarea>

                    <label for="name" class="text-black italic font-extrabold w-full text-start mt-4">Nom
                        Complet</label>
                    <input disabled class="shadow-md form-control" value="{{ $res->full_name }}" type="text">
                    <label for="email" class="text-black italic font-extrabold w-full text-start mt-4">Email</label>
                    <input disabled class="shadow-md form-control" value="{{ $res->email }}" type="text">
                    <label for="phone" class="text-black italic font-extrabold w-full text-start mt-4">Téléphone</label>
                    <input disabled class="shadow-md form-control" value="{{ $res->phone }}" type="text">

                    <label for="number_of_persons" class="text-black italic font-extrabold w-full text-start mt-4">Nombre
                        personne</label>
                    <input disabled class="shadow-md form-control" value="{{ $res->number_of_persons }}" type="text">
                    <label for="status" class="text-black italic font-extrabold w-full text-start mt-4">Status</label>
                    <input disabled class="shadow-md form-control" value="{{ $res->status }}" type="text">

                </div>
            </div>
        </div>
    </div>
    @include('modal.reservationConfirmModal')
    @include('modal.reservationRejectModal')
    @include('modal.reservationDeleteModal')
@endsection


@section('scripts')
    <script src="{{ asset('toaster/toaster.js') }}"></script>

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
    </script>
    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
            toastr.options = ToasterOptions;
        </script>
    @endif
    @if (Session::has('warning'))
        <script>
            toastr.warning("{{ Session::get('warning') }}");
            toastr.options = ToasterOptions;
        </script>
    @endif
@endsection
