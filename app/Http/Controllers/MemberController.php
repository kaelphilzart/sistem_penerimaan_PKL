<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\t_membership;

class MemberController extends Controller
{
    //
    // public function create(){
    //     return view('admin.member');
    // }

    //buat member

    public function indexProfil(){
        $data = t_membership::paginate(1);
    return view('admin.member', ['data' => $data]);
    }
    public function store(Request $request){
       
        //validasi form
        
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];
        
        $this->validate($request, [
            'nama_depan' => 'required',
            'nickname' => 'required|unique:t_membership',
            'kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'id_discord' => 'required',
        ], $message);

        $data = new t_membership;
        $data->nama_depan = $request->nama_depan;
        $data->nama_belakang = $request->nama_belakang;
        $data->nickname = $request->nickname;
        $data->kelamin = $request->kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->id_discord = $request->id_discord;
        // print_r($data);
        // exit;
        $data->save();
        return redirect('Thank-You')->with('success', 'Data berhasil disimpan');;
    }

    //tampil data t_membership
    public function index(){
        $data = t_membership::paginate(1);
    return view('admin.member', ['data' => $data]);
    }

    public function destroy($id){
        $data = t_membership::find($id);
        $data->delete();
        return redirect('/data-member')->with('success', 'Data berhasil dihapus');;
    }


    public function edit($id){
        $data = t_membership::find($id);
        return view('admin.updateMember', compact('data'));
    }

    public function update(Request $request, $id){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'kode_member' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'nickname' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'id_discord' => 'required',
           
        ], $message);

        $data = t_membership::find($id);
        $data->kode_member = $request->kode_member;
        $data->nama_depan = $request->nama_depan;
        $data->nama_belakang = $request->nama_belakang;
        $data->nickname = $request->nickname;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->id_discord = $request->id_discord;
        // $data->phone = $request->phone;
        // $data->alamat = $request->alamat;
        $data->update();
        return redirect('/data-member')->with('success', 'Data berhasil diubah');;
    }
}
