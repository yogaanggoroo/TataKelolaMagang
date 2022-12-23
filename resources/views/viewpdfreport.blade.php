<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Peserta Magang</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <style type="text/css">
        table tr td {
            font-size: 11pt;
        }

        table tr th {
            font-size: 13pt;
        }

    </style>

    <div style="margin-top: -45px; margin-left: -44px;">
        <img src="{{ public_path('/img/template-atas.jpg') }}" class="float-start" style="width: 550px;">
    </div>

    <!-- <div style="margin-right: 55px; margin-top: 81px;">
        <img src="{{ public_path('/img/pln.jpg') }}" class="float-end" style="width: 150px;">
    </div>
    <div style="margin-right: 59px;">
        <h3 class="text-right" style="padding-top: 55px; font-size: 13pt; ">KANTOR PUSAT</h3>
    </div> -->

    <div class="text-center pt-5">
        <h3>LAPORAN PESERTA MAGANG</h3>
    </div>

    <div class="pt-3">
        <left>
            <p> Nama : <br>
                Nim : <br>
                Alamat : <br>
            </p>
        </left>
    </div>

    <div class="text-justify pt-2">
        <p>
            Mengenai dengan dibuatnya laporan peserta magang di PT PLN (Persero).
            Berikut ini merupakan laporan magang peserta, atas nama Mahasiswa :
        </p>
    </div>

    <table class='table table-bordered pt-2'>
        <thead style="background-color: #12a2bd; color: white;">
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama Peserta</th>
                <th scope="col">Divisi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Laporan</th>
            </tr>
        </thead>
        <tbody>
            @php
            $nomor = 1;
            @endphp
            @foreach ($cetaklaporan as $item)
            <tr class="text-center">
                <td>{{ $nomor++ }}</td>
                <td>{{ auth()->user()->name }}</td>
                <td>{{ $item->division }}</td>
                <td>{{ $item->date->format('d-m-Y') }}</td>
                <td>{{ $item->reports }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- <div class="text-justify pt-2">
        <p>Dengan ini menyatakan laporan magang dengan nama diatas merupakan laporan
            magang sendiri dan bukan merupakan tiruan, salinan atau duplikasi dari laporan magang yang telah dipergunakan
            untuk mendapatkan gelar Sarjana Teknik Informatika baik dilingkungan PT PLN (Persero)
            maupun di lingkungan perusahaan lain, serta belum pernah dipublikasikan.
        </p>
        <p style="margin-top: -5px;">Pernyataan ini dibuat dengan penuh kesadaran dan rasa tanggung jawab serta
            bersedia memikul segala resiko jika ternyata pernyataan diatas tidak benar.</p>
        <p style="margin-top: -5px;">Demikian yang telah disampaikan, atas perhatian dan kerjasamanya diucapkan terima
            kasih.</p>
    </div> -->

    <div class="ttd text-right pt-5">
        <p>_________________________</p>
        <p style="margin-right: 45px; margin-top: -10px;">Mentor</p>
        <p class="pt-5">____________________</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
