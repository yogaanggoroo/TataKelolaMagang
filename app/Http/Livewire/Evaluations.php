<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Evaluation;

class Evaluations extends Component
{
    public
    $name,
    $email,
    $division,
    $evaluation_1,
    $evaluation_2,
    $evaluation_3,
    $evaluation_4,
    $evaluation_5,
    $evaluation_id;
    public $isModal = 0;

    public function render()
    {
        $evaluations = Evaluation::orderBy('created_at', 'DESC')->paginate(3);
        return view('livewire.evaluations',['evaluations' => $evaluations  ]);
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
     $this->evaluation_1='';
     $this->evaluation_2='';
     $this->evaluation_3='';
     $this->evaluation_4='';
     $this->evaluation_5='';
     $this->evaluation_id = '';
 }




 //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
 public function store()
 {
     //MEMBUAT VALIDASI
    $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'division' => 'required',
        'evaluation_1' => 'required|numeric',
        'evaluation_2' => 'required|numeric',
        'evaluation_3' => 'required|numeric',
        'evaluation_4' => 'required|numeric',
        'evaluation_5' => 'required|numeric',

    ]);


     //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
     //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
     //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
     $result = Evaluation::updateOrCreate(['id' => $this->evaluation_id], [
         'name' => $this->name,
         'email' => $this->email,
         'division' => $this->division,
         'evaluation_1' => $this->evaluation_1,
         'evaluation_2' => $this->evaluation_2,
         'evaluation_3' => $this->evaluation_3,
         'evaluation_4' => $this->evaluation_4,
         'evaluation_5' => $this->evaluation_5,
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
     $evaluation = Evaluation::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
     //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
     $this->evaluation_id = $id;
     $this->name = $evaluation->name;
     $this->email = $evaluation->email;
     $this->division = $evaluation->division;
     $this->evaluation_1 = $evaluation->evaluation_1;
     $this->evaluation_2 = $evaluation->evaluation_2;
     $this->evaluation_3 = $evaluation->evaluation_3;
     $this->evaluation_4 = $evaluation->evaluation_4;
     $this->evaluation_5 = $evaluation->evaluation_5;

     $this->openModal(); //LALU BUKA MODAL
 }

 //FUNGSI INI UNTUK MENGHAPUS DATA
 public function delete($id)
 {
     $evaluation = Evaluation::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
     $evaluation->delete(); //LALU HAPUS DATA
     session()->flash('message', $evaluation->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
 }

}
