<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    function AddReport(Request $req){
        $report = new Report;
        $report->name=$req->name;
        $report->division=$req->division;
        $report->date=$req->date;
        $report->reports=$req->reports;
        $report->save();
        return redirect('laporan');
    }
}
