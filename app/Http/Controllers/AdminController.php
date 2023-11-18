<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\C_magang;
use App\Models\A_magang;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //buat_user
    public function createUser(){
        return view('admin.createUser');
    }

    public function store(Request $request){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
        ];

        $attributes = request()->validate([
            'username' => 'required|unique:m_user',
            'password' => 'required',
        ], $message);
        
        $attributes['password'] = bcrypt($attributes['password'] );

        $data = new m_user;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save($attributes);
        return redirect('/data-admin')->with('success', 'Data berhasil disimpan');;
    }
        
    //tampil data m_user
    public function index(){
        $data = m_user::paginate(5);
    return view('admin.admin', ['data' => $data]);
    }

    public function destroy($id){
        $data = m_user::find($id);
        $data->delete();
        return redirect('/data-admin')->with('success', 'Data berhasil dihapus');;
    }


    public function edit($id){
        $data = m_user::find($id);
        return view('admin.updateForm', compact('data'));
    }

    public function update(Request $request, $id){
        //validasi form
        $message= [
            'required' =>':attribute tidak boleh kosong',
            'unique' => 'attribute sudah digunakan',
            'numeric' => 'attribute harus berupa angka',
        ];

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
           

        ], $message);

        $data = m_user::find($id);
        $data->username = $request->username;
        $data->password = $request->password;

        $data->update();
        return redirect('/data-admin')->with('success', 'Data berhasil diubah');;
    }

    
    public function indexC_magang(){
        $data = C_magang::paginate(5);
    return view('admin.c_magang', ['data' => $data]);
    }
    public function destroyC_magang($id){
        $data = C_magang::find($id);
        $data->delete();
        return redirect('data-cmagang')->with('success', 'Data berhasil dihapus');;
    }

    public function indexA_magang(){
        $data = A_magang::paginate(5);
    return view('admin.anggota_magang', ['data' => $data]);
    }

    public function destroyA_magang($id){
        $data = A_magang::find($id);
        $data->delete();
        return redirect('data-anggota_magang')->with('success', 'Data berhasil dihapus');;
    }
}
