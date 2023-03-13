@extends('layouts.app')


@section('title')
    Internationale | LE BLOKK
@endsection

@section('styles')
@endsection

@section('content')
    @php
        $img = 'cuisine-internationale-1.jpg';
    @endphp
    <div class="">

        <div id="topdiv"
            class="px-5 slide_photo flex bg-fixed bg-no-repeat justify-center items-center relative md:px-48 h-[400px] md:h-screen bg-cover bg-center "
            style="background-image: url('{{ asset('images/cuisine-internationale-1.jpg') }}')">
            <div class="absolute bottom-0 right-0 left-0 top-0 bg-black opacity-50">

            </div>
            <div data-aos="fade-down" class=" text-white z-10 my-5">
                <h1 class="text-2xl font-mono md:text-7xl uppercase text-center font-extrabold">un restaurant à expérience
                    UNIque </h1>
                <p class="text-lg md:text-3xl font-extrabold text-center mt-10"> l’ambiance feutrée de nos spectacles </p>
            </div>
        </div>
        <div class="px-6 md:px-40 my-16 text-white">
            <div class="mx-auto text-center">
                <h1 class="text-center font-thin  italic fw-dancing text-2xl">
                    Goûtez la différence
                </h1>
                <h2 class="text-center  text-4xl my-6 font-semibold text-orange-300 fw-sans tracking-widest">MENU 285 DHS
                </h2>
                <img class="mx-auto" src="{{ asset('images/line2.png') }}" alt="line">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-16">
                <div class="text-center flex justify-center items-center">
                    <img class="mx-auto rounded w-full h-full" src="{{ asset('images/Calque-100.png') }}" alt="Calque-100">
                </div>
                <div class="text-white  md:flex md:justify-start md:items-center">
                    <div class="md:w-full">
                        <div class="my-3">
                            <h3 class="text-center text-2xl font-semibold text-white fw-serif">ENTRÉES 105 DHS</h3>
                            <h4 class="text-center font-medium text-xl">(Entrée, plat, dessert)</h4>
                        </div>
                        <div class="space-y-5 ">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Blokk bowl au poulet
                                </p>
                                <p class="text-white text-lg">
                                    riz vinaigré, légumes du jour, pommes, avocat, fruit secs, sauce soja
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Carpaccio d'artichauts et poulpe mariné
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Mozzarella panée
                                </p>
                                <p class="text-white text-lg">
                                    sur jeunes pousses sauce sweet chili
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    œuf poché croustillant
                                </p>
                                <p class="text-white text-lg">
                                    petits pois et jeunes pousses
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center md:hidden">
                    <img class="mx-auto rounded w-full" src="{{ asset('images/Supreme-de-volaille-caramelise.jpg') }}"
                        alt="Supreme-de-volaille-caramelise">
                </div>
                <div class="text-white md:flex md:justify-start md:items-center">
                    <div class="md:w-full">
                        <div class="my-3">
                            <h3 class="text-center text-2xl font-semibold text-white fw-serif">
                                PLAT 140 DHS
                            </h3>
                        </div>
                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Suprême de volaille caramélisé
                                </p>
                                <p class="text-white text-lg">
                                    pomme de terre écrasée
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Filet de saint-pierre
                                </p>
                                <p class="text-white text-lg">
                                    rôti, petits légumes glacés
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Riz sauté façons thai
                                </p>
                                <p class="text-white text-lg">
                                    au paulet et légumes grillés au vegan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center hidden md:flex justify-center items-center">
                    <img class="mx-auto rounded w-full" src="{{ asset('images/Supreme-de-volaille-caramelise.jpg') }}"
                        alt="Supreme-de-volaille-caramelise">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center flex justify-center items-center">
                    <img class="mx-auto rounded w-full" src="{{ asset('images/Creme-brulee.jpg') }}" alt="Creme-brulee">
                </div>

                <div class="text-white md:flex md:justify-start md:items-center">
                    <div class=" md:w-full">

                        <div class="my-3 ">
                            <h3
                                class="text-center text-2xl font-semibold text-white fw-serif tracking-widest tracking-widest">
                                DESSERTS MAISON 75 DHS
                            </h3>
                        </div>
                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Pavlova aux fruits de saison
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Crémé brûlée
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Délice de mangue glacé
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="px-6 md:px-40 my-16 text-white">
            <div class="mx-auto text-center">
                <h1 class="text-center  italic fw-dancing text-2xl">
                    Goûtez la différence
                </h1>
                <h2 class="text-center  text-4xl my-6 font-semibold text-orange-300 fw-sans">MENU 375 DHS</h2>
                <img class="mx-auto mb-6" src="{{ asset('images/line2.png') }}" alt="line">
                <h4 class="text-center font-medium text-xl">
                    (Entrée, plat, dessert)
                </h4>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center flex justify-center items-center">
                    <img class="mx-auto rounded w-full" src="{{ asset('images/Tartare-de-saumon.jpg') }}"
                        alt="Tartare-de-saumon">
                </div>
                <div class="text-white  md:flex md:justify-start md:items-center">
                    <div class="md:w-full">
                        <div class="my-3">
                            <h3
                                class="text-center text-2xl font-semibold text-white fw-serif tracking-widest tracking-widest">
                                ENTRÉES 140 DHS</h3>
                        </div>
                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Tartare d'été aux tomates caramélisées
                                </p>
                                <p class="text-white text-lg">
                                    tepenade d'olives noires
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Burrate
                                </p>
                                <p class="text-white text-lg">
                                    à la fleur de sel, sorbet tomate basilic
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Tartare de saumon
                                </p>
                                <p class="text-white text-lg">
                                    au gingembre frais
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center md:hidden">
                    <img class="mx-auto rounded w-full" src="{{ asset('images/filet-de-boeuf-1.jpg') }}"
                        alt="filet-de-boeuf-1">

                </div>
                <div class="text-white  md:flex md:justify-start md:items-center">
                    <div class="md:w-full">
                        <div class="my-3">
                            <h3 class="text-center text-2xl font-semibold text-white fw-serif tracking-widest">
                                PLAT 180 DHS
                            </h3>
                        </div>
                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    émincé de bœuf
                                </p>
                                <p class="text-white text-lg">
                                    sauce aux cèpes, risetti crémeux
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Souris d'agneau confite
                                </p>
                                <p class="text-white text-lg">
                                    purée de carottes au cumin
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Pavé de saumon rôti
                                </p>
                                <p class="text-white text-lg">
                                    zaalouk au citron confit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center hidden md:flex justify-center items-center">
                    <img class="mx-auto rounded w-full" src="{{ asset('images/filet-de-boeuf-1.jpg') }}"
                        alt="filet-de-boeuf-1">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center">
                    <img class="mx-auto rounded h-full w-full flex justify-center items-center"
                        src="{{ asset('images/Moelleux-chocolat-glace-vanille.jpg') }}"
                        alt="Moelleux-chocolat-glace-vanille">
                </div>

                <div class="text-white  md:flex md:justify-start md:items-center">
                    <div class="md:w-full">
                        <div class="my-3">
                            <h3 class="text-center text-2xl font-semibold text-white fw-serif tracking-widest">
                                DESSERTS MAISON 90 DHS
                            </h3>
                        </div>
                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Tarte citron meringuée (revisitée)
                                </p>

                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Sphère chocolat, glace vanille
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Crumble de fruits secs
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    caramel chaud
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Notre Macaron aux framboises
                                </p>
                                <p class="text-white text-lg">
                                    parfumé à la rose
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Moelleux chocolat
                                </p>
                                <p class="text-white text-lg">
                                    glace vanille
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center md:hidden">

                    <img class="mx-auto rounded" src="{{ asset('images/istockphoto-1073666236-612x612-1.jpg') }}"
                        alt="istockphoto-1073666236-612x612-1">
                </div>
                <div class="text-white flex justify-start items-center">
                    <div class="space-y-5">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                Filet de bœuf ........... 210 DH
                            </p>
                            <p class="text-white text-lg">
                                jus corsé petit gratin dauphinois
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                Langouste de l'atlantique
                                260 DH
                            </p>
                            <p class="text-white text-lg">
                                grillé, beurre citronné, riz parfumé
                            </p>
                            <p class="text-white text-lg">
                                (300/400grs)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center hidden md:flex justify-center items-center">
                    <img class="mx-auto rounded" src="{{ asset('images/istockphoto-1073666236-612x612-1.jpg') }}"
                        alt="istockphoto-1073666236-612x612-1">
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center flex justify-center items-center">
                    <img class="mx-auto rounded h-full" src="{{ asset('images/Calque-92.png') }}" alt="Calque-92">
                </div>

                <div class="text-white  md:flex md:justify-start md:items-center">
                    <div class="md:w-full">
                        <div class="my-3">
                            <h3 class="text-center text-2xl font-semibold text-white fw-serif tracking-widest">
                                JAPONAIS (8 pcs) 110 Dhs
                            </h3>
                        </div>
                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">

                                    Incredible Roll

                                </p>
                                <p class="text-white text-lg">
                                    tempura, crevette, avocat, saumon, oignon rouge
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Crunchy Crevettes
                                </p>
                                <p class="text-white text-lg">
                                    gambas panées cheese tanoki
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">

                                    Volcano

                                </p>
                                <p class="text-white text-lg">
                                    saumon, cheese, tobico, sesame grillé
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">

                                    Special California Roll

                                </p>
                                <p class="text-white text-lg">
                                    surimi, avocat, philadelphia, saumon
                                </p>
                            </div>
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">

                                    Bomba Ball

                                </p>
                                <p class="text-white text-lg">
                                    riz épicé, saumon cheese, mayonnaise, sésame
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="px-6 md:px-40 my-16 text-white">
            <div class="mx-auto text-center">
                <h4 class="text-center font-extrabold font-mono text-3xl">
                    COMPOSEZ VOTRE ASSIETTE​
                </h4>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:my-20 my-10">
                <div class="text-white  md:flex md:justify-start md:items-center">
                    <div class="md:w-full">

                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    California saumon cuit (3 pcs)
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Maki avocat (3 pcs)
                                </p>

                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">

                                    Maki saumon ( 6 pcs )

                                </p>
                                <p class="text-white text-lg">
                                    créme cheese
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center flex justify-center items-center">
                    <img class="mx-auto rounded"
                        src="{{ asset('images/lots-of-various-types-of-sushi-rolls-topped-with-sesame-seeds-close-up-view-610x610.jpg') }}"
                        alt="lots-of-various-types-of-sushi-rolls-topped-with-sesame-seeds-close-up-view-610x610">
                </div>
                <div class="text-white  md:flex md:justify-start md:items-center">
                    <div class="md:w-full">

                        <div class="space-y-5">
                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Sushi saumon (3 pcs)
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    Sushi eby crevette (3 pcs)
                                </p>
                            </div>

                            <div class="">
                                <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                    California saumon épicé (3 pcs)
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="text-white ">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:my-10 my-10">
                        <div class="">
                            <p class="uppercase text-orange-300 md:text-start text-lg md:text-2xl font-medium">
                                Sakai Blokk (12 pcs) ..........................125 DH

                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 md:text-end text-lg md:text-2xl font-medium">
                                Tokyo Blokk (18 pcs) ........................185 DH

                            </p>

                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 md:text-start text-lg md:text-2xl font-medium">
                                Osaka Blokk (15 pcs) ........................155 DH

                            </p>
                        </div>
                        <div class="">
                            <p class="uppercase text-orange-300 md:text-end text-lg md:text-2xl font-medium">
                                Miyoshi Blokk (24 pcs) ...................240 DH

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 md:px-40 my-16 text-white">
            <div class="mx-auto text-center">
                <h1 class="text-center  italic fw-dancing text-2xl">
                    Goûtez la différence
                </h1>
                <h2 class="text-center  text-4xl my-6 font-semibold text-orange-300 fw-sans uppercase tracking-widest">MENU
                    Enfant 160 DHS
                </h2>
                <img class="mx-auto mb-6" src="{{ asset('images/line2.png') }}" alt="line">

            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center flex justify-center items-center">
                    <img class="mx-auto rounded" src="{{ asset('images/Emince-de-poulet.jpg') }}"
                        alt="Emince-de-poulet">
                </div>
                <div class="text-white flex justify-start items-center md:py-10">

                    <div class="space-y-5">
                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                Émincé de poulet
                            </p>
                            <p class="text-white text-lg">
                                Purée maison
                            </p>
                        </div>

                        <div class="">
                            <p class="uppercase text-orange-300 text-lg md:text-2xl font-medium">
                                Pennes au saumon
                            </p>
                            <p class="text-white text-lg">
                                Sauce à l'aneth
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:my-20 my-10">
                <div class="text-center md:hidden">
                    <img class="mx-auto rounded "
                        src="{{ asset('images/Chocolate-Ice-Cream-HD-Desktop-Wallpaper-46571-1024x640.jpg') }}"
                        alt="Chocolate-Ice-Cream-HD-Desktop-Wallpaper-46571-1024x640">

                </div>
                <div class="text-white flex justify-start items-center">

                    <div class="space-y-5 md:w-full">
                        <div class="">
                            <p class="uppercase md:w-full text-center text-orange-300 text-lg md:text-2xl font-medium">
                                Glaces ou Sorbets
                            </p>

                        </div>
                    </div>
                </div>
                <div class="text-center hidden md:flex justify-center items-center">
                    <img class="mx-auto rounded"
                        src="{{ asset('images/Chocolate-Ice-Cream-HD-Desktop-Wallpaper-46571-1024x640.jpg') }}"
                        alt="Chocolate-Ice-Cream-HD-Desktop-Wallpaper-46571-1024x640">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.upfooter', ['img' => $img])
@endsection

@section('scripts')
@endsection
