@extends('layouts.app')

@section('title')
    Home | LE BLOKKk
@endsection

@section('befor-style')
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('toaster/toaster.css') }}">
    <link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/timepicker.css') }}">
    {{-- <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> --}}
    <style>
        .ui-timepicker-viewport {
            color: #EB8C3E !important;
        }

        .bg-orange-400 {
            background-color: #e78f08 !important;
        }

        .bg-orange-400:hover {
            background-color: #e7a848 !important;
        }
    </style>
@endsection

@section('content')
    @php
        $img = 'image1.png';
    @endphp
    <div id="reservation"
        class="px-5 bg-fixed flex justify-center items-center relative md:px-48 md:h-screen bg-containe bg-top"
        style="background-image: url('{{ asset('images/image1.png') }}')">
        <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-50">

        </div>
        <div class=" text-white mb-10 md:mt-20 mt-28">
            <div class="px-3 py-3 opacity-80 bg-black">
                <form action="{{ route('reservation.store') }}" method="post" class="">
                    @csrf
                    <input type="hidden" name="origin" value="{{ $origin }}">

                    <h2 class="text-center  text-4xl my-6 font-semibold text-orange-300 fw-sans tracking-widest">RESERVATION
                    </h2>
                    @if (Session::has('success'))
                        <div class="text-green-500 text-center bg-black px-3 py-2">
                            <i class="fa-regular fa-circle-check"></i> {{ Session::get('success') }}
                        </div>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 p-2 text-center gap-4">
                            <input name="name" value="{{ old('name') }}"
                                class="px-3 py-3 border-2 border-orange-300 @error('name') border-red-500 @enderror bg-black "
                                placeholder="Nom Complet" type="text">
                            <input name="email" value="{{ old('email') }}"
                                class="px-3 py-3 bg-black border-2 border-orange-300  @error('email') border-red-500 @enderror"
                                placeholder="Email" type="email">
                            <input name="phone" value="{{ old('phone') }}"
                                class="px-3 py-3 bg-black border-2 border-orange-300  @error('phone') border-red-500 @enderror"
                                placeholder="Telephone" type="text">
                            <input id="datepicker" name="date" value="{{ old('date') }}"
                                class="px-3 py-3 bg-black border-2 border-orange-300  @error('date') border-red-500 @enderror"
                                placeholder="Date" type="text" datepicker datepicker-autohide>
                            <input name="time" value="{{ old('time') }}"
                                class="px-3 py-3 bg-black border-2 border-orange-300  @error('time') border-red-500 @enderror"
                                placeholder="Heure" type="text" id="timepicker">
                            <select name="number_of_persons"
                                class="px-3 py-2 bg-black border-2 border-orange-300  @error('number_of_persons') border-red-500 @enderror"
                                id="">

                                @for ($i = 1; $i <= 20; $i++)
                                    <option value="{{ $i }}">{{ $i }} Personne</option>
                                @endfor
                            </select>
                            <div class="text-orange-200">
                                <div id="message" class="cursor-pointer text-orange-300">Ajoute un Message</div>
                                <textarea placeholder="Votre Message" value="{{ old('message') }}" name="message"
                                    class="px-3 w-full py-3 bg-black border-2 border-orange-300 hidden"></textarea>
                            </div>
                        </div>
                        <div class="text-center p-10 text-2xl fw-josef">
                            Toute réservation en ligne sera confirmée par mail dans les plus brefs délais.
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="px-5 rounded py-2 bg-orange-400 font-semibold hover:bg-orange-200 text-black">RESERVER</button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <div class="px-6 md:px-24 my-16">
        <div class="grid grid-cols-1 md:grid-cols- gap-y-10 gap-x-4">
            <div class="text-center">
                <div class="md:hidden">
                    <h2 data-aos="fade-down" class="text-white text-center italic fw-dancing text-2xl">Taste the
                        difference
                    </h2>
                    <h3 data-aos="fade-down" class="text-center  text-4xl my-6 font-semibold text-orange-300 fw-sans">

                        RESTAURANT
                    </h3>
                    <img class="mx-auto mb-5 w-[50%] " src="{{ asset('images/line2.png') }}" alt="">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-x-4">
                    <img data-aos="fade-right" class="h-full w-full rounded-lg" src="{{ asset('images/image2.jpg') }}"
                        class="" alt="image2">
                    <div data-aos="fade-left" class="text-center">
                        <div class="hidden md:block">
                            <h2 data-aos="fade-up" class="text-white text-center italic fw-dancing text-2xl">Taste the
                                difference</h2>
                            <h3 data-aos="fade-up"
                                class="text-center tracking-widest text-4xl my-6 font-semibold text-orange-300 fw-sans">

                                RESTAURANT
                            </h3>
                            <img class="mx-auto mb-5 w-[50%] " src="{{ asset('images/line2.png') }}" alt="">
                        </div>
                        <div data-aos="fade-down"
                            class="text-xl leading-10 my-5 fw-josef text-white text-center font-semibold">
                            LE BLOKK, un restaurant LIVE MUSIQUE à expérience unique où se côtoient les plaisirs de la
                            table
                            et l’ambiance feutrée de nos spectacles : d’où notre appellation de restaurant spectacle à
                            Marrakech.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 items-center">

                    <div data-aos="fade-left" class="text-center">
                        <div class="">
                            <h2 data-aos="fade-up" class="text-white text-center italic fw-dancing text-2xl">Composez
                                votre assiette</h2>
                            <h3 data-aos="fade-up"
                                class="text-center tracking-widest text-4xl my-6 font-semibold text-orange-300 fw-sans">
                                FOOD</h3>
                            <img class="mx-auto mb-5 w-[50%]" src="{{ asset('images/line2.png') }}" alt="">
                        </div>
                        <img data-aos="fade-right" class="h-full rounded-lg mx-auto md:hidden"
                            src="{{ asset('images/image3.jpg') }}" alt="image2">
                        <div data-aos="fade-down"
                            class="text-xl leading-10 fw-josef my-5 text-white text-center font-semibold">
                            Riche en histoire musicale et artistique, LE BLOKK propose une cuisine pleine de fraîcheur
                            et un
                            décor cosy. Rien de mieux pour déguster nos plats préparer avec soin et délicatesse par
                            notre
                            talentueuse chef.
                        </div>
                    </div>
                    <img data-aos="fade-right" class="h-full w-full mx-auto rounded-lg hidden md:block"
                        src="{{ asset('images/image3.jpg') }}" alt="image2">
                </div>
            </div>

            <div class="text-center">
                <div class="md:hidden">
                    <h2 data-aos="fade-down" class="text-white text-center italic fw-dancing text-2xl">Let the Music
                        Speak!</h2>
                    <h3 data-aos="fade-down"
                        class="text-center tracking-widest text-4xl my-6 font-semibold text-orange-300 fw-sans">
                        SPECTACLE</h3>
                    <img class="mx-auto mb-5 w-[50%]" src="{{ asset('images/line2.png') }}" alt="">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 items-center">
                    <img data-aos="fade-right" class="h-full w-full rounded-lg" src="{{ asset('images/image4.png') }}"
                        class="" alt="image2">
                    <div data-aos="fade-left" class="text-center">
                        <div class="hidden md:block">
                            <h2 data-aos="fade-up" class="text-white text-center italic fw-dancing text-2xl">Let the
                                Music
                                Speak!</h2>
                            <h3 data-aos="fade-up"
                                class="text-center tracking-widest text-4xl my-6 font-semibold text-orange-300 fw-sans">
                                SPECTACLE</h3>
                            <img class="mx-auto mb-5 w-[50%]" src="{{ asset('images/line2.png') }}" alt="">
                        </div>
                        <div data-aos="fade-down"
                            class="text-xl leading-10 fw-josef my-5 text-white text-center font-semibold">
                            Riche en histoire musicale et artistique, LE BLOKK propose une cuisine pleine de fraîcheur
                            et un
                            décor cosy. Rien de mieux pour déguster nos plats préparer avec soin et délicatesse par
                            notre
                            talentueuse chef.
                        </div>
                        <div class="text-center mx-auto my-5">
                            <a href="{{ route('nos-spectacles', Cookie::get('origin')) }}"
                                class="border border-orange-400 text-white hover:bg-orange-400 hover:text-black py-3 px-5 rounded">Voir
                                Nos spectacles</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('layouts.upfooter', ['img' => $img])
@endsection

@section('scripts')
    <script src="{{ asset('js/timepicker.js') }}"></script>
    <script src="{{ asset('toaster/toaster.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script>
        $(function() {
            $.datepicker.setDefaults({
                monthNames: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août",
                    "Septembre", "Octobre", "Novembre", "Décembre"
                ]
            });
            $("#datepicker").datepicker({
                minDate: 0,
                dateFormat: 'mm/dd/yy',
                inline: true,
                // numberOfMonths: [1],
                dayNamesMin: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                beforeShowDay: function(date) {
                    var day = date.getDay();
                    return [(day != 1)];
                }
            });
        });


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
        $(document).ready(function() {
            $("#message").click(function() {
                $("textarea").toggle();
            });

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

        });
    </script>
    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
            toastr.options = ToasterOptions;
        </script>
    @endif
@endsection
