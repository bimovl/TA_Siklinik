<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $admin = DB::table('admins')
            ->where('username', $username)
            ->where('password', $password)
            ->first();

        $perawat = DB::table('perawats')
            ->where('username', $username)
            ->where('password', $password)
            ->first();

        if ($admin) {
            $data['user'] = [
                'id'    => $admin->id_admin,
                'nama'  => $admin->nama,
                'level' => 'ADMIN',
            ];
            session($data);

            return redirect('/');
        } else if ($perawat) {
            $data['user'] = [
                'id'    => $perawat->id_perawat,
                'nama'  => $perawat->nama_perawat,
                'level' => 'PERAWAT'
            ];
            session($data);
            return redirect('/');
        } else {
            return redirect()
                ->route('login')
                ->with([
                    ['color' => 'danger'],
                    ['message' => 'Username atau passord salah'],
                ]);
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }

    public function abc()
    {
        echo "abc";
    }
}
