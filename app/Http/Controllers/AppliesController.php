<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applies;

class AppliesController extends Controller
{
    //
    function AddApplies(Request $req){
        $report = new Applies;
        $report->email=$req->email;
        $report->name=$req->name;
        $report->gender=$req->gender;
        $report->phone=$req->phone;
        $report->address=$req->address;
        $report->image=$req->image;
        $report->upload_proposal=$req->upload_proposal;
        $report->upload_rekomendasi=$req->upload_rekomendasi;
        $report->upload_cv=$req->upload_cv;
        $report->upload_nilai=$req->upload_nilai;
        $report->upload_portfolio=$req->upload_portfolio;
        $report->save();
        return redirect('daftar');
    }
}
