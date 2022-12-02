<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Presence;

class Presences extends Component
{
    public
    $name,
    $email,
    $division,
    $date,
    $office_hours,
    $description,
    $presence_id;
    public $isModal = 0;

    public function render()
    {
        $presences = Presence::orderBy('created_at', 'DESC')->paginate(3);
        return view('livewire.admin-presences',['presences' => $presences  ]);
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
     $this->office_hours = '';
     $this->description = '';
     $this->presence_id = '';
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
        'office_hours' => 'required',
        'description' => 'required',

    ]);


     //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
     //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
     //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
     $result = Presence::updateOrCreate(['id' => $this->presence_id], [
         'name' => $this->name,
         'email' => $this->email,
         'division' => $this->division,
         'date' => $this->date,
         'office_hours' => $this->office_hours,
         'description' => $this->description,
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
     $presence = Presence::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
     //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
     $this->presence_id = $id;
     $this->name = $presence->name;
     $this->email = $presence->email;
     $this->division = $presence->division;
     $this->date = $presence->date;
     $this->office_hours= $presence->office_hours;
     $this->description = $presence->description;

     $this->openModal(); //LALU BUKA MODAL
 }

 //FUNGSI INI UNTUK MENGHAPUS DATA
 public function delete($id)
 {
     $presence = Presence::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
     $presence->delete(); //LALU HAPUS DATA
     session()->flash('message', $presence->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
 }


}
