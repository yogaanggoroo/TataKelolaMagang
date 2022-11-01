<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    function AddTask(Request $req){
        $report = new Task;
        $report->name=$req->name;
        $report->division=$req->division;
        $report->date=$req->date;
        $report->upload=$req->upload;
        $report->save();
        return redirect('tugas');
    }
}
