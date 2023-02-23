@extends('layouts.app')

@section('title')
    Home | LE BLOKK
@endsection

@section('befor-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/timepicker.css') }}">
@endsection
@section('styles')
@endsection

@section('content')
    @php
        $img = 'image1.png';
    @endphp
    <div id="reservation py-10"
        class="px-5 bg-fixed flex justify-center items-center relative md:px-48 md:h-screen bg-containe bg-top"
        style="background-image: url('{{ asset('images/image1.png') }}')">
        <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-50">

        </div>
        <div class=" text-white z-10 mb-10 md:mt-20 mt-28">
            <div class="px-3 py-3 opacity-90 bg-black">
                <form data-aos="fade-up" action="" class="z-20">
                    <h2 class="text-orange-300 font-extrabold text-5xl text-center italic fw-josef fw">RESERVATION</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 p-2 text-center gap-4">
                        <input class="px-3 py-3 bg-black border-2 border-orange-300" placeholder="Nom Complet"
                            type="text">
                        <input class="px-3 py-3 bg-black border-2 border-orange-300" placeholder="Email" type="email">
                        <input class="px-3 py-3 bg-black border-2 border-orange-300" placeholder="Telephone" type="text">
                        <input class="px-3 py-3 bg-black border-2 border-orange-300" placeholder="Date" type="text"
                            datepicker datepicker-autohide>
                        <input class="px-3 py-3 bg-black border-2 border-orange-300" placeholder="Heure" type="text"
                            id="timepicker">
                        <select class="px-3 py-2 bg-black border-2 border-orange-300" name="" id="">
                            <option selected disabled value="">Nombre De personnage</option>
                            <option value="">1 Personne</option>
                            <option value="">1 Personne</option>
                            <option value="">2 Personne</option>
                            <option value="">3 Personne</option>
                            <option value="">4 Personne</option>
                            <option value="">5 Personne</option>
                            <option value="">6 Personne</option>
                            <option value="">7 Personne</option>
                            <option value="">8 Personne</option>
                            <option value="">9 Personne</option>
                            <option value="">10 Personne</option>
                            <option value="">11 Personne</option>
                            <option value="">12 Personne</option>
                        </select>
                        <div class="text-orange-200">
                            <div id="message" class="cursor-pointer text-orange-300">Ajoute un Message</div>
                            <textarea placeholder="Votre Message" name=""
                                class="px-3 w-full py-3 bg-black border-2 border-orange-300 hidden"></textarea>
                        </div>
                    </div>
                    <div class="text-center p-10 text-2xl fw-josef">
                        Toute réservation en ligne sera confirmée par mail dans les plus brefs délais.
                    </div>
                    <div class="text-center">
                        <button
                            class="px-5 rounded py-2 bg-orange-400 font-semibold hover:bg-orange-200 text-black">RESERVER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="px-5 md:px-20 my-16">
        <div class="grid grid-cols-1 md:grid-cols- gap-y-10 gap-x-4">
            <div class="text-center">
                <div class="md:hidden">
                    <h2 data-aos="fade-down" class="text-white text-center italic fw-dancing text-2xl">Taste the difference
                    </h2>
                    <h3 data-aos="fade-down" class="text-orange-300 font-semibold text-xl text-center fw-explora">
                        RESERVATION</h3>
                    <img class="mx-auto mb-5 w-[50%] " src="{{ asset('images/line2.png') }}" alt="">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <img data-aos="fade-right" class="h-full rounded-lg" src="{{ asset('images/image2.jpg') }}"
                        class="" alt="image2">
                    <div data-aos="fade-left" class="text-center">
                        <div class="hidden md:block">
                            <h2 data-aos="fade-up" class="text-white text-center italic fw-dancing text-2xl">Taste the
                                difference</h2>
                            <h3 data-aos="fade-up" class="text-orange-300 font-semibold text-5xl text-center fw-explora">
                                RESERVATION</h3>
                            <img class="mx-auto mb-5 w-[50%] " src="{{ asset('images/line2.png') }}" alt="">
                        </div>
                        <div data-aos="fade-down" class="text-2xl my-5 fw-josef text-white text-center font-extrabold">
                            LE BLOKK, un restaurant LIVE MUSIQUE à expérience unique où se côtoient les plaisirs de la table
                            et l’ambiance feutrée de nos spectacles : d’où notre appellation de restaurant spectacle à
                            Marrakech.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center">

                    <div data-aos="fade-left" class="text-center">
                        <div class="">
                            <h2 data-aos="fade-up" class="text-white text-center italic fw-dancing text-2xl">Composez
                                votre assiette</h2>
                            <h3 data-aos="fade-up" class="text-orange-300 font-semibold text-5xl text-center fw-explora">
                                FOOD</h3>
                            <img class="mx-auto mb-5 w-[50%]" src="{{ asset('images/line2.png') }}" alt="">
                        </div>
                        <img data-aos="fade-right" class="h-full rounded-lg mx-auto md:hidden"
                            src="{{ asset('images/image3.jpg') }}" alt="image2">
                        <div data-aos="fade-down" class="text-2xl fw-josef my-5 text-white text-center font-extrabold">
                            Riche en histoire musicale et artistique, LE BLOKK propose une cuisine pleine de fraîcheur et un
                            décor cosy. Rien de mieux pour déguster nos plats préparer avec soin et délicatesse par notre
                            talentueuse chef.
                        </div>
                    </div>
                    <img data-aos="fade-right" class="h-full mx-auto rounded-lg hidden md:block"
                        src="{{ asset('images/image3.jpg') }}" alt="image2">
                </div>
            </div>

            <div class="text-center">
                <div class="md:hidden">
                    <h2 data-aos="fade-down" class="text-white text-center italic fw-dancing text-2xl">Let the Music
                        Speak!</h2>
                    <h3 data-aos="fade-down" class="text-orange-300 font-semibold text-5xl text-center fw-explora">
                        SPECTACLE</h3>
                    <img class="mx-auto mb-5 w-[50%]" src="{{ asset('images/line2.png') }}" alt="">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <img data-aos="fade-right" class="h-full rounded-lg" src="{{ asset('images/image4.png') }}"
                        class="" alt="image2">
                    <div data-aos="fade-left" class="text-center">
                        <div class="hidden md:block">
                            <h2 data-aos="fade-up" class="text-white text-center italic fw-dancing text-2xl">Let the Music
                                Speak!</h2>
                            <h3 data-aos="fade-up" class="text-orange-300 font-semibold text-5xl text-center fw-explora">
                                SPECTACLE</h3>
                            <img class="mx-auto mb-5 w-[50%]" src="{{ asset('images/line2.png') }}" alt="">
                        </div>
                        <div data-aos="fade-down" class="text-2xl fw-josef my-5 text-white text-center font-extrabold">
                            Riche en histoire musicale et artistique, LE BLOKK propose une cuisine pleine de fraîcheur et un
                            décor cosy. Rien de mieux pour déguster nos plats préparer avec soin et délicatesse par notre
                            talentueuse chef.
                        </div>
                        <div class="text-center mx-auto my-5">
                            <a href="{{ route('nos-spectacles') }}"
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    <script src="{{ asset('js/timepicker.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#message").click(function() {
                $("textarea").toggle();
            });

            $('#timepicker').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minTime: '8',
                maxTime: '2:00pm',
                defaultTime: '11',
                startTime: '08:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true,
            });

        });
    </script>
@endsection
