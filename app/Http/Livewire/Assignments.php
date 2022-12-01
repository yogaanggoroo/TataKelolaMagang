<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Assignment;
use Livewire\WithFileUploads;

class Assignments extends Component
{
    use WithFileUploads;

    public
    $name,
    $email,
    $division,
    $date,
    $assignment,
    $assignment_id;
    public $isModal = 0;

    public function render()
    {
        $assignments = Assignment::orderBy('created_at', 'DESC')->paginate(3);
        return view('livewire.assignments',['assignments' => $assignments  ]);
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
     $this->assignment = '';
     $this->assignment_id = '';
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
        'assignment' => 'required|mimes:docs,pdf',

    ]);

    $fileassignment = $this->assignment->store('assignment','public');

     //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
     //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
     //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
     $result = Assignment::updateOrCreate(['id' => $this->assignment_id], [
         'name' => $this->name,
         'email' => $this->email,
         'division' => $this->division,
         'date' => $this->date,
         'assignment' => $fileassignment,
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
     $assignment = Assignment::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
     //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
     $this->assignment_id = $id;
     $this->name = $assignment->name;
     $this->email = $assignment->email;
     $this->division = $assignment->division;
     $this->date = $assignment->date;
     $this->assignment = $assignment->assignment;

     $this->openModal(); //LALU BUKA MODAL
 }

 //FUNGSI INI UNTUK MENGHAPUS DATA
 public function delete($id)
 {
     $assignment = Assignment::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
     $assignment->delete(); //LALU HAPUS DATA
     session()->flash('message', $assignment->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
 }


}
