@extends('layouts.admin')

@section('title')
    Reservation | Le Blokk
@endsection
@section('befor-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jqueryConfirm.css') }}">
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">

    {{-- now --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}" />

    <style>
        .buttons-copy,
        .buttons-print {
            display: none !important;
        }

        tr.hover {
            cursor: pointer;
            background-color: rgb(223, 223, 223) !important;
            /* whatever other hover styles you want */
        }

        .pending {
            background-color: #fca6a6 !important;
        }

        .confirm {
            background-color: #b5e8ff !important;
        }

        .reject {
            background-color: #ffdd80 !important;
        }
    </style>
@endsection

@section('content')
    @php
        $bookings = app\Models\Resevation::all();
        $booking_counts = $bookings->groupBy('status')->map(function ($status) {
            return $status->count();
        });
    @endphp
    <div class="mt-10">
        <h1 class="text-center text-4xl my-4 font-semibold">BOOKINGS</h1>
        <div class="col-lg-12">
            <div class="card">

                <div class="body shadow-2xl px-20 ">
                    <div class="row clearfix justify-center space-x-3 my-4">
                        <div class="col-lg-3 col-md-6 col-sm-6 bg-red-200">
                            <div class="state_w1 mb-1 mt-1">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <h5 class="text-center">{{ $booking_counts['pending'] }}</h5>
                                        <span><i class="fa-solid fa-clock text-yellow-600"></i> Pending</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 bg-teal-200">
                            <div class="state_w1 mb-1 mt-1">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <h5 class="text-center">{{ $booking_counts['confirmed'] }}</h5>
                                        <span><i class="fa-solid fa-square-check text-green-800"></i> Confirmed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 bg-yellow-200">
                            <div class="state_w1 mb-1 mt-1">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <h5 class="text-center">{{ $booking_counts['declined'] }}</h5>
                                        <span><i class="fa-solid fa-x text-red-600"></i> Closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="allEventForm" action="{{ route('reservation.destroy') }}" method="post" autocomplete="off">
                        @csrf
                        @method('DELETE')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 mb-3">
                            <div class="text-start">
                                <button type="button" data-toggle="modal" data-target="#exportBooking"
                                    class="px-3 py-2 bg-slate-900 shadow-xl hover:bg-slate-800 text-white rounded ">Export
                                </button>
                                <button disabled id="deleteEventButton" name="deleteEventButton" type="submit"
                                    class="btn shadow-xl bg-red-500 btn-danger waves-effect"><i
                                        class="zmdi zmdi-delete"></i>
                                    Supprimé</button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th data-orderable="false"> <input class="text-blue-900 rounded" id="makeAllChecked"
                                                type="checkbox" name="checkallbox"></th>
                                        <th>Date</th>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Tel</th>
                                        <th>N/P</th>
                                        <th>Status</th>
                                        <th>/</th>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $res)
                                        <tr
                                            class="@if ($res->status == 'declined') reject
                                        @elseif($res->status == 'confirmed')
                                        confirm
                                        @else
                                        pending @endif">
                                            <td>
                                                <input class="evenCheckBox text-blue-900 rounded" type="checkbox"
                                                    @checked(false) name="bookings[]"
                                                    value="{{ $res->id }}">
                                            </td>
                                            <td>{{ $res->date->format('F d, Y') . ' ' . $res->time }}</td>
                                            <td><a
                                                    href="{{ route('reservation.show', $res->id) }}">#{{ $res->id }}</a>
                                            </td>
                                            <td>{{ $res->full_name }}</td>
                                            <td>{{ $res->email }}</td>
                                            <td>{{ $res->phone }}</td>

                                            <td>{{ $res->number_of_persons }}</td>
                                            <td>{{ $res->status }}</td>
                                            <td>
                                                <a href="{{ route('reservation.edit', $res->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('modal.expordReservationModal')
@endsection


@section('scripts')
    <script defer src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script defer src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('js/jqueryConfirm.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('toaster/toaster.js') }}"></script>


    <script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>


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
    @if (Session::has('delete'))
        <script>
            toastr.error("{{ Session::get('delete') }}");
            toastr.options = ToasterOptions;
        </script>
    @endif
    <script>
        $('#deleteEventButton').confirm({
            title: 'Confirm pour supprimé',
            content: 'Confirm pour supprimé les Booking selectioné',
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'DELETE',
                    btnClass: 'btn-red',
                    action: function() {
                        var input = $("<input>")
                            .attr("type", "hidden")
                            .attr("name", "deleteEventButton").val("delete");
                        $('#allEventForm').append(input);
                        $('#allEventForm').submit();
                    }
                },
                close: function() {}
            }
        });
        $(document).ready(function() {
            //page all notification
            var clicked = false;
            $("#makeAllChecked").on("click", function() {
                $(".evenCheckBox").prop("checked", !clicked);
                clicked = !clicked;

                $("#deleteEventButton").prop("disabled", !clicked);
                $("#editEventStatusButton").prop("disabled", !clicked);

            });
            $('.evenCheckBox').click(function() {
                var numberOfChecked = $('input:checkbox:checked').length;
                if (numberOfChecked > 0) {
                    $("#deleteEventButton").prop("disabled", false);
                    $("#editEventStatusButton").prop("disabled", false);
                } else {
                    $("#deleteEventButton").prop("disabled", true);
                    $("#editEventStatusButton").prop("disabled", true);
                }
            })
            $('tr').click(function(e) {
                console.log(e.target);
                if ($(e.target).is("td"))
                    window.location = $(this).find('a').attr('href');
                else
                    return;
            }).hover(function() {
                $(this).toggleClass('hover');
            });
            $('#exportDate').change(function() {
                if ($(this).val() == 'range') {
                    $('#rangeDate').removeClass('d-none');
                } else {
                    $('#rangeDate').addClass('d-none');
                }
            })

        });
    </script>
@endsection
