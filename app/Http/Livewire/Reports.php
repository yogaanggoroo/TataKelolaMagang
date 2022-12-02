<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Report;

class Reports extends Component
{
    public
    $name,
    $email,
    $division,
    $date,
    $logbook,
    $report_id;
    public $isModal = 0;

    public function render()
    {
        $reports = Report::orderBy('created_at', 'DESC')->paginate(3);
        return view('livewire.admin-reports',['reports' => $reports  ]);
    }



 //FUNGSI INI AKAN DIPANGGIL KETIKA TOMBOL TAMBAH ANGGOTA DITEKAN
 public function create()
 {
     //KEMUDIAN DI DALAMNYA KITA MENJALANKAN FUNGSI UNTUK MENGOSONGKAN FIELD
     $this->resetFields();
     //DAN MEMBUKA MODAL
     $this->openModal();
 }

 //FUNGSI INI UNTUK MENUTUP MODAL DIMANA VARIABLE ISMODAL KITA SET JADI FALSE
 public function closeModal()
 {
     $this->isModal = false;
 }

 //FUNGSI INI DIGUNAKAN UNTUK MEMBUKA MODAL
 public function openModal()
 {
     $this->isModal = true;
 }


 //FUNGSI INI UNTUK ME-RESET FIELD/KOLOM, SESUAIKAN FIELD APA SAJA YANG KAMU MILIKI
 public function resetFields()
 {
     $this->name = '';
     $this->email = '';
     $this->division = '';
     $this->date = '';
     $this->logbook = '';
     $this->report_id = '';
 }




 //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
 public function store()
 {
     //MEMBUAT VALIDASI
    $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'division' => 'required',
        'date' => 'required',
        'logbook' => 'required',

    ]);


     //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
     //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
     //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
     $result = Report::updateOrCreate(['id' => $this->report_id], [
         'name' => $this->name,
         'email' => $this->email,
         'division' => $this->division,
         'date' => $this->date,
         'logbook' => $this->logbook,
     ]);

     //BUAT FLASH SESSION UNTUK MENAMPILKAN ALERT NOTIFIKASI
     if ($result != "0") {
        session()->flash('message',   ' Berhasil diupdate');
    }else{
        session()->flash('errMessage', 'Gagal diupdate');
    }
    $this->closeModal(); //TUTUP MODAL
     $this->resetFields(); //DAN BERSIHKAN FIELD
 }

 //FUNGSI INI UNTUK MENGAMBIL DATA DARI DATABASE BERDASARKAN ID
 public function edit($id)
 {
     $report = Report::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
     //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
     $this->report_id = $id;
     $this->name = $report->name;
     $this->email = $report->email;
     $this->division = $report->division;
     $this->date = $report->date;
     $this->logbook = $report->logbook;

     $this->openModal(); //LALU BUKA MODAL
 }

 //FUNGSI INI UNTUK MENGHAPUS DATA
 public function delete($id)
 {
     $report = Report::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
     $report->delete(); //LALU HAPUS DATA
     session()->flash('message', $report->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
 }



}
