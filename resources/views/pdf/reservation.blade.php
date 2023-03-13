<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>


</head>

<body>
    <div style="padding:15px 30px;">
        <div>
            <span>LE BLOKK</span> <span style="float:right">Booking from {{ $date }}</span>
        </div>
        <hr>
        @foreach ($reservations as $res)
            <div style="margin: 5px 0px;">{{ $res->date->format('F d, Y') }}</div>

            <div style="border:1px solid black">
                <div style="padding:10px; background-color: rgb(235, 235, 235);">
                    <div>{{ $res->full_name }} | {{ $res->status }}</div>

                    <div style="float: right">{{ $res->time }}</div>
                </div>
                <div style="padding: 10px;">
                    <div style="margin-top: 5px;">
                        <span style="font-weight: bold;">Email :</span>
                        <span>{{ $res->email }}</span>
                    </div>
                    <div style="margin-top: 5px;">
                        <span style="font-weight: bold;">Phone :</span>
                        <span>{{ $res->phone }}</span>
                    </div>
                    <div style="margin-top: 5px;">
                        <span style="font-weight: bold;">Message :</span>
                        <span>{{ $res->message }} </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
