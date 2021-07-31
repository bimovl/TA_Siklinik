<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class AdminController extends Controller
{


    public function index()
    {
        $data = Admin::all();
        $id_admin = Admin::select('id_admin')->get()->last();
        if ($id_admin == null) {
            $id_admin = 1;
        }
        $id_admin  = substr($id_admin['id_admin'], 4);
        $id_admin = (int) $id_admin;
        $id_admin += 1;
        $id_admin  = "AD" . str_pad($id_admin, 3, "0", STR_PAD_LEFT);
        return view('admin.index', compact('data'));
    }

    public function add()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);

        $admin = new Admin;
        $id_admin = Admin::select('id_admin')->get()->last();
        if ($id_admin == null) {
            $id_admin = 1;
        }
        $id_admin  = substr($id_admin['id_admin'], 4);
        $id_admin = (int) $id_admin;
        $id_admin += 1;
        $id_admin  = "AD" . str_pad($id_admin, 3, "0", STR_PAD_LEFT);
        $admin->nama = $request->nama;
        $admin->jeniskelamin = $request->jeniskelamin;
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->level = $request->level;
        if ($admin->save()) {
            Toastr::success('Data Berhasil Dimasukkan', 'Success');
            return redirect('admin/');
        } else {
            Toastr::error('Data Gagal Dimasukkan', 'Error');
            return redirect('admin/');
        }
    
    }

    public function edit($id_admin, Request $request)
    {
        $admin = Admin::find($id_admin);
        return view('admin.edit', ['data' => $admin]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);

        $admin = Admin::find($request->id_admin);
        $admin->nama = $request->nama;
        $admin->jeniskelamin = $request->jeniskelamin;
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->level = $request->level;
        if ($admin->save()) {
            Toastr::success('Data Berhasil Diupdate', 'Success');
            return redirect('admin/');
        } else {
            Toastr::error('Data Gagal Diupdate', 'Error');
            return redirect('admin/');
        }
    }

    public function destroy($id_admin)
    {
        $admin = admin::find($id_admin);
        $admin->delete();
        Toastr::success('Data Berhasil Dihapus', 'Success');
        return back();
    }
}
