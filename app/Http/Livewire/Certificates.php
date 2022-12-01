<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Certificate;
use Livewire\WithFileUploads;


class Certificates extends Component
{
    use WithFileUploads;

    public
    $name,
    $email,
    $division,
    $date,
    $certificate,
    $certificate_id;
    public $isModal = 0;

    public function render()
    {
        $certificates = Certificate::orderBy('created_at', 'DESC')->paginate(3);
        return view('livewire.certificates',['certificates' => $certificates  ]);
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
     $this->certificate = '';
     $this->certificate_id = '';
 }




 //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
 public function store()
 {
     //MEMBUAT VALIDASI
    $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'certificate' => 'required|mimes:docs,pdf',

    ]);

    $filecertificate = $this->certificate->store('certificate','public');

     //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
     //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
     //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
     $result = certificate::updateOrCreate(['id' => $this->certificate_id], [
         'name' => $this->name,
         'email' => $this->email,
         'certificate' => $filecertificate,
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
     $certificate = Certificate::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
     //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
     $this->certificate_id = $id;
     $this->name = $certificate->name;
     $this->email = $certificate->email;
     $this->certificate = $certificate->certificate;

     $this->openModal(); //LALU BUKA MODAL
 }

 //FUNGSI INI UNTUK MENGHAPUS DATA
 public function delete($id)
 {
     $certificate = Certificate::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
     $certificate->delete(); //LALU HAPUS DATA
     session()->flash('message', $certificate->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
 }


}
