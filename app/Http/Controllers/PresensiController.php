<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masuk');
    }

    public function keluar()
    {
        return view('keluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        if ($presensi){
            //dd("sudah melakukan presensi");
            return redirect('masuk')->with('success', 'Anda sudah melakukan presensi masuk!');
        }else{
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                'jam_masuk' => $localtime,
            ]);
        }

        return redirect('masuk')->with('success', 'Selamat bekerja!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function halamanhistory()
    {
        return view('halaman-history');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        //$pagination = 2;
        //$presensi = Presensi::paginate($pagination);
        //$presensi = Presensi::all();
        $presensi = Presensi::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->orderBy('tgl','asc')->get();
        return view('history',compact('presensi'));
        //return view('history',compact('presensi'));
        //return view('history', [presensiList => presensi ]);

    }

    /* public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensi = Presensi::where('user', auth()->user());
        return view('history', compact('presensi'));
    } */

    public function presensipulang() {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();

        $dt=[
            'jam_keluar' => $localtime,
            'jam_kerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jam_masuk))
        ];

        if ($presensi->jam_keluar == ""){
            $presensi->update($dt);
            return redirect('keluar')->with('success', 'Selamat beraktivitas!');
        }else{
           // dd("Sudah melakukan presensi keluar");
            return redirect('keluar')->with('success', 'Anda sudah melakukan presensi keluar!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
