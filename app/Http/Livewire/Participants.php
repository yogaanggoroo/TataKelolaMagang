<?php

namespace App\Http\Livewire;

use App\Models\Participant;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Participants extends Component
{
    use WithFileUploads;
    use WithPagination;

    public
    $name,
    $email,
    $phone,
    $gender,
    $university,
    $photo ,
    $old_photo,
    $proposal,
    $recommendation_letter,
    $CV,
    $transcripts,
    $status,
    $division,
    $participant_id;
    //public $participants;
    public $isModal = 0;




    public function render()
    {
        $participants = Participant::orderBy('created_at', 'asc')->paginate(3);
        return view('livewire.admin-participant',['participants' => $participants  ]);
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
     $this->gender='';
     $this->phone = '';
     $this->university = '';
     $this->photo = '';
     $this->proposal = '';
     $this->recommendation_letter = '';
     $this->CV = '';
     $this->transcripts = '';
     $this->status = '';
     $this->division = '';
     $this->participant_id = '';
 }




 //METHOD STORE AKAN MENG-HANDLE FUNGSI UNTUK MENYIMPAN / UPDATE DATA
 public function store()
 {
     //MEMBUAT VALIDASI
    $imageValidation = '';
    if($this->photo != $this->old_photo){
        $imageValidation = "required|image|mimes:jpg,jpeg,png";
    }

    $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'gender' => 'required',
        'phone' => 'required|numeric',
        'university' => 'required',
        'photo' => $imageValidation,
        'proposal' => 'required|mimes:docs,pdf',
        'recommendation_letter' => 'required|mimes:docs,pdf',
        'CV' => 'required|mimes:docs,pdf',
        'transcripts' => 'required|mimes:docs,pdf',
        'status' => 'required|mimes:docs,pdf',
        'division' => 'required',
    ]);

    $filephoto = $this->photo->store('Foto','public');
    $fileproposal = $this->proposal->store('proposal','public');
    $filerecommendation = $this->recommendation_letter->store('recommendation','public');
    $fileCV = $this->CV->store('CV','public');
    $filetrancripts = $this->transcripts->store('transcripts','public');


     //QUERY UNTUK MENYIMPAN / MEMPERBAHARUI DATA MENGGUNAKAN UPDATEORCREATE
     //DIMANA ID MENJADI UNIQUE ID, JIKA IDNYA TERSEDIA, MAKA UPDATE DATANYA
     //JIKA TIDAK, MAKA TAMBAHKAN DATA BARU
     $result = Participant::updateOrCreate(['id' => $this->participant_id], [
         'name' => $this->name,
         'email' => $this->email,
         'gender' => $this->gender,
         'phone' => $this->phone,
         'university' => $this->university,
         'photo' => $filephoto,
         'proposal' => $fileproposal,
         'recommendation_letter' => $filerecommendation,
         'CV' =>  $fileCV,
         'transcripts' => $filetrancripts,
         'status' => $this->status,
         'division' => $this->division,
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
     $participant = Participant::find($id); //BUAT QUERY UTK PENGAMBILAN DATA
     //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
     $this->participant_id = $id;
     $this->name = $participant->name;
     $this->email = $participant->email;
     $this->gender = $participant->gender;
     $this->phone = $participant->phone;
     $this->university = $participant->university;
     $this->photo = $participant->photo;
     $this->proposal = $participant->proposal;
     $this->recommendation_letter = $participant->recommendation_letter;
     $this->CV = $participant->CV;
     $this->transcripts = $participant->transcripts;
     $this->status   = $participant->status;
     $this->division = $participant->division;

     $this->openModal(); //LALU BUKA MODAL
 }

 //FUNGSI INI UNTUK MENGHAPUS DATA
 public function delete($id)
 {
     $participant = Participant::find($id); //BUAT QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
     $participant->delete(); //LALU HAPUS DATA
     session()->flash('message', $participant->name . ' Dihapus'); //DAN BUAT FLASH MESSAGE UNTUK NOTIFIKASI
 }


}
