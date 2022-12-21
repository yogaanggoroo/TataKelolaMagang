<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use PDF;

class CertificateController extends Controller
{
    //
    function AddCertif(Request $req){
        $certificate = new Certificate;
        $certificate->user_id = auth()->id();
        $certificate->ttl=$req->ttl;
        $certificate->division=$req->division;
        $certificate->tgl_mulai=$req->tgl_akhir;
        $certificate->tgl_akhir=$req->tgl_akhir;
        $certificate->save();
        return redirect('sertifikat');
    }

    public function download_sertifikat()
    {
        $certificate = Certificate::where('user_id', auth()->id())->get();
        $pdf = PDF::loadview('viewpdfsertifikat', ['cetaksertifikat' => $certificate])->setpaper('A4','landscape');
        return $pdf->stream('Sertifikat_Peserta_Magang');
    }

}
