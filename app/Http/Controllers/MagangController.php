<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\C_magang;
use App\Models\A_magang;
use App\Models\m_user;
class MagangController extends Controller
{
    //
    public function daftarMagang(Request $request){
       
        //validasi form
         
        $request->validate([
            'email' => 'required|email|unique:c_magang',
        'nama_lengkap' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required|date',
        'asal_instansi' => 'required',
        'minat' => 'required',
        'skill' => 'required',
            'cv' => 'mimes:pdf,doc,docx|max:2048', // Contoh validasi file: PDF, DOC, DOCX, maksimal 2MB
        ]);

        $data = new C_magang;
        $data->email = $request->input('email');
        $data->nama_lengkap = $request->input('nama_lengkap');
        $data->tempat_lahir = $request->input('tempat_lahir');
        $data->tgl_lahir = $request->input('tgl_lahir');
        $data->asal_instansi = $request->input('asal_instansi');
        $data->minat = $request->input('minat');
        $data->skill = $request->input('skill');

        if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv');
            $cvFileName =  $cvFile->getClientOriginalName();
            $cvFile->storeAs('public/cv', $cvFileName); // Simpan file tugas di direktori 'storage/app/public/tasks'
            $data->cv = 'storage/cv/' . $cvFileName; // Simpan nama file tugas dalam basis data
        }
        // print_r($data);
        // exit;
        $data->save();
        return redirect('landingPage')->with('success', 'Data berhasil daftar');
    }

    public function terima(Request $request, $id)
{
    $dataMember = C_magang::find($id);

    if (!$dataMember) {
        return redirect()->route('data-cmagang');
    }

    // Membuat entri baru dalam tabel A_magang
    $dataPenerimaan = new A_magang();
    $dataPenerimaan->email = $dataMember->email;
    $dataPenerimaan->nama_lengkap = $dataMember->nama_lengkap;
    $dataPenerimaan->asal_instansi = $dataMember->asal_instansi;
    $dataPenerimaan->minat = $dataMember->minat;
    $dataPenerimaan->save();

    // Membuat entri baru dalam tabel m_user dan mengatur password sama dengan username
    $dataUser = new m_user();
    $username = strtolower(explode(' ', $dataMember->nama_lengkap)[0]); 
    $dataUser->username = $username;
    $dataUser->password = bcrypt($username);
    $dataUser->level = 'magang'; // Mengatur password sama dengan username yang telah di-hash
    $dataUser->save();

    // Hapus data dari tabel Cmagang
    $dataMember->delete();

    return redirect()->route('data-cmagang');
}

    

//  public function daftarMagang(Request $request){
       
//         //validasi form
        
//         $message= [
//             'required' =>':attribute tidak boleh kosong',
//             'unique' => 'attribute sudah digunakan',
//             'numeric' => 'attribute harus berupa angka',
//         ];
        
//         $this->validate($request, [
//             'nama_lengkap' => 'required',
//             'email' => 'required|unique:t_membership',
//             'tempat_lahir' => 'required',
//             'asal_instansi' => 'required',
//             'tgl_lahir' => 'required',
//             'minat' => 'required',
//             'skill' => 'required',
//             'cv' => 'mimes:pdf,doc,docx|max:2048',
//         ], $message);

//             $data = new C_magang;
//             $data->email = $request->email;
//             $data->nama_lengkap = $request->nama_lengkap;
//             $data->tempat_lahir = $request->tempat_lahir;
//             $data->tgl_lahir = $request->tgl_lahir;
//             $data->asal_instansi = $request->asal_instansi;
//             $data->minat = $request->minat;
//             $data->skill = $request->skill;
    
//             if ($request->hasFile('cv')) {
//                 $cvFile = $request->file('cv');
//                 $cvFileName =  $cvFile->getClientOriginalName();
//                 $cvFile->storeAs('public/cv', $cvFileName); // Simpan file tugas di direktori 'storage/app/public/tasks'
//                 $data->cv = 'storage/cv/' . $cvFileName; // Simpan nama file tugas dalam basis data
//             }
//         // print_r($data);
//         // exit;
//         $data->save();
//         return redirect('landingPage')->with('success', 'Data berhasil disimpan');;
//     }

}
