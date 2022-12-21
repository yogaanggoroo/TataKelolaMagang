<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sertifikat Magang</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <style type="text/css">
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        table tr td {
            font-size: 11pt;
        }

        table tr th {
            font-size: 13pt;
        }

        .ptpln {
            font-size: 20pt;
        }

        .sertifikat {
            font-size: 30pt;
        }

    </style>

    <div class="text-center">
        <h3 class="ptpln">PT PLN (Persero)</h3>
        <img src="{{ public_path('/img/pln.jpg') }}" class="float-end"
            style="width: 100px; margin-right: 50px; margin-top: -10px;">
    </div>

    <div class="text-center pt-5">
        <h3 class="sertifikat" style="text-decoration: underline; font-style: italic;">SERTIFIKAT</h3>
    </div>

    <div class="text-center pt-5">
        <p>Diberikan Kepada</p>
    </div>

    <table class='pt-3 text-center' style="margin-left: 355px;">
        <tbody>
            @foreach ($cetaksertifikat as $item)
            <tr class="text-center">
            <tr class="">
                <p style="margin-top: 15px;">Nama : </p>
                <td>{{ auth()->user()->name }}</td>
            </tr>
            <tr class="">
                <P style="margin-top: 15px;">Tempat/Tgl Lahir : </P>
                <td>{{ $item->ttl }}</td>
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center pt-5">
        <p>Telah mengikuti Program Magang pada Divisi _______________</p>
        <p style="margin-top: -15px;">Dari tanggal _______________ s.d _______________</p>
        <p style="margin-top: -15px;">Dinyatakan telah selesai pada Program Magang PT PLN (Persero)</p>
    </div>

    <div class="ttd text-right" style="margin-top: 75px; margin-right: 20px;">
        <p>_________________________</p>
        <p class="pt-5">____________________</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
