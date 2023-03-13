<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reservation Confirmation</title>
    <style type="text/css">
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #ffffff;
            border: none;
            border-radius: 4px;
        }

        table td {
            padding: 10px 25px;
            border: none;
            vertical-align: top;
        }

        table td.header {
            background-color: rgb(73, 192, 73);
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #f5f5f5;
        }

        table td.title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        table td.content {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        table td.content p {
            margin: 0;
            padding: 0;
            line-height: 1.5;
        }

        table td.button {
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        table td.button a {
            display: inline-block;
            background-color: #0088cc;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.2s ease-in-out;
        }

        table td.button a:hover {
            background-color: #006699;
        }
    </style>
</head>

<body>
    <div style="background-color: rgb(73, 192, 73); padding:50px 150px">
        @if ($status == 'confirm')
            <table>
                <tr>
                    <td class="header" colspan="2">LE BLOKK</td>
                </tr>

                <tr>
                    <td class="title" colspan="2">Votre réservation à LE BLOKK est confirmée.</td>
                </tr>
                <tr>
                    <td class="content" colspan="2">
                        <p>Bonjour <span style=" font-weight:bold"> {{ $res->full_name }},</span></p>
                        <p style="margin: 10px 0px">
                            @if ($emailMessage == '')
                                Votre demande de réservation a été confirmée. Nous nous réjouissons de vous accueillir
                                prochainement.
                            @else
                                {{ $emailMessage }}
                            @endif
                        </p>
                        <p style="margin: 10px 0px; font-weight:bold">Votre réservation:</p>
                        <p>{{ $res->full_name }}</p>
                        <p>{{ $res->number_of_persons }} Personnes</p>
                        <p> {{ $res->date->format('F d, Y') . ' ' . $res->time }}</p>
                        <p style="margin:20px 0px;font-style: italic;">ce message a été envoyé par <a
                                style="color:rgb(29, 208, 253); font-weight:bold;text-decoration:none;font-style: italic;"
                                href="https://leLE BLOKKmarrakech.com/">LE BLOKK</a> à
                            {{ Carbon\Carbon::now()->addHour()->format('F d, Y g:i A') }}</p>
                    </td>
                </tr>

            </table>
        @elseif ($status == 'reject')
            <table>
                <tr>
                    <td class="header" colspan="2">LE BLOKK</td>
                </tr>

                <tr>
                    <td class="title" colspan="2">Votre réservation à LE BLOKK n'a pas été acceptée.</td>
                </tr>
                <tr>
                    <td class="content" colspan="2">
                        <p>Bonjour <span style=" font-weight:bold"> {{ $res->full_name }},</span></p>
                        <p style="margin: 10px 0px">
                            @if ($emailMessage == '')
                                Donnez-nous quelques instants pour nous assurer que nous avons de la place pour vous.
                                Nous sommes complets ou pas ouverts à l'heure que vous avez demandée :
                            @else
                                {{ $emailMessage }}
                            @endif
                        </p>
                        <p style="margin: 10px 0px; font-weight:bold">Les détails de votre reservation:</p>
                        <p>{{ $res->full_name }}</p>
                        <p>{{ $res->number_of_persons }} Personnes</p>
                        <p> {{ $res->date->format('F d, Y') . ' ' . $res->time }}</p>
                        <p style="margin:20px 0px;font-style: italic;">ce message a été envoyé par <a
                                style="color:rgb(29, 208, 253); font-weight:bold;text-decoration:none;font-style: italic;"
                                href="https://leLE BLOKKmarrakech.com/">LE BLOKK</a> à
                            {{ Carbon\Carbon::now()->addHour()->format('F d, Y g:i A') }}</p>
                    </td>
                </tr>

            </table>
        @elseif ($status == 'pending')
            <table>
                <tr>
                    <td class="header" colspan="2">LE BLOKK</td>
                </tr>

                <tr>
                    <td class="title" colspan="2">Votre réservation au LE BLOKK est en attante</td>
                </tr>
                <tr>
                    <td class="content" colspan="2">
                        <p>Bonjour <span style=" font-weight:bold"> {{ $res->full_name }},</span></p>
                        <p style="margin: 10px 0px">
                            @if ($emailMessage == '')
                                Donnez-nous quelques instants pour nous assurer que nous avons de la place pour vous.
                                Vous
                                recevrez bientôt un autre courriel de notre part. Si cette demande a été faite en dehors
                                de
                                nos heures normales de travail,
                                il se peut que nous ne puissions pas la confirmer avant que nous soyons à nouveau
                                ouverts.
                            @else
                                {{ $emailMessage }}
                            @endif
                        </p>
                        <p style="margin: 10px 0px; font-weight:bold">Les détails de votre reservation:</p>
                        <p>{{ $res->full_name }}</p>
                        <p>{{ $res->number_of_persons }} Personnes</p>
                        <p> {{ $res->date->format('F d, Y') . ' ' . $res->time }}</p>
                        <p style="margin:20px 0px;font-style: italic;">ce message a été envoyé par <a
                                style="color:rgb(29, 208, 253); font-weight:bold;text-decoration:none;font-style: italic;"
                                href="https://leLE BLOKKmarrakech.com/">LE BLOKK</a> à
                            {{ Carbon\Carbon::now()->addHour()->format('F d, Y g:i A') }}</p>
                    </td>
                </tr>

            </table>
        @elseif ($status == 'reserve')
            <table>
                <tr>
                    <td class="header" colspan="2">LE BLOKK</td>
                </tr>

                <tr>
                    <td class="title" colspan="2">Votre réservation au LE BLOKK est en attente</td>
                </tr>
                <tr>
                    <td class="content" colspan="2">
                        <p>Merci <span style=" font-weight:bold"> {{ $res->full_name }},</span></p>
                        <p style="margin: 10px 0px">
                            Donnez-nous quelques instants pour nous assurer que nous avons de la place pour vous.
                            Vous
                            recevrez bientôt un autre courriel de notre part. Si cette demande a été faite en dehors
                            de
                            nos heures normales de travail,
                            il se peut que nous ne puissions pas la confirmer avant que nous soyons à nouveau
                            ouverts.
                            {{-- {{ $emailMessage }} --}}

                        </p>
                        <p style="margin: 10px 0px; font-weight:bold">Les détails de votre reservation:</p>
                        <p>{{ $res->full_name }}</p>
                        <p>{{ $res->number_of_persons }} Personnes</p>
                        <p> {{ $res->date->format('F d, Y') . ' ' . $res->time }}</p>
                        <p style="margin:20px 0px;font-style: italic;">ce message a été envoyé par <a
                                style="color:rgb(29, 208, 253); font-weight:bold;text-decoration:none;font-style: italic;"
                                href="https://leLE BLOKKmarrakech.com/">LE BLOKK</a> à
                            {{ Carbon\Carbon::now()->addHour()->format('F d, Y g:i A') }}</p>
                    </td>
                </tr>

            </table>
        @endif

    </div>
</body>

</html>
