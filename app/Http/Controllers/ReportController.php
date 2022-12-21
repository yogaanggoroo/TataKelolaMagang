<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use PDF;

class ReportController extends Controller
{
    function AddReport(Request $req){
        $report = new Report;
        $report->user_id = auth()->id();
        $report->division=$req->division;
        $report->date=$req->date;
        $report->reports=$req->reports;
        $report->save();
        return redirect('laporan');
    }

    public function export_pdf()
    {
        $report = Report::where('user_id', auth()->id())->get();
        $pdf = PDF::loadview('viewpdfreport', ['cetaklaporan' => $report])->setpaper('A4','potrait');
        return $pdf->stream('Laporan_Magang');
    }
}
