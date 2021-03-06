<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use DB;
use Redirect;
use View;
use Auth;

use App\Http\Requests\validasilogin;

class CrudController extends Controller
{
    public function tambahdata()
    {
        $data = array(
            'nama'=>Input::get('nama'),
            'alamat'=>Input::get('alamat'),
            'kelas'=>Input::get('kelas')
            );

        DB::table('siswa')->insert($data);
        return Redirect::to('/read')->with('message', 'berhasil menambah data');
    }

    public function lihatdata()
    {
        $data = DB::table('siswa')->get();
        return View::make('read')->with('siswa', $data);
    }

    public function hapusdata($id)
    {
        $data = DB::table('siswa')->where('id', '=', $id)->delete();
        return Redirect::to('/read')->with('message', 'berhasil menghapus data');
    }

    public function editdata($id)
    {
        $data = DB::table('siswa')->where('id', '=', $id)->first();
        return View::make('form_edit')->with('siswa', $data);
    }

    public function proseseditdata()
    {
        $data = array(
            'nama'=>Input::get('nama'),
            'alamat'=>Input::get('alamat'),
            'kelas'=>Input::get('kelas')
            );

        DB::table('siswa')->where('id', '=', Input::get('id'))->update($data);
        return Redirect::to('/read')->with('message', 'berhasil mengubah data');
    }

    public function tambahlogin(validasilogin $data)
    {
        $username = $data->username;
        $password = bcrypt($data->password);

        $data = array(
            'username'=>$username,
            'password'=>$password,
            'hak_akses'=>'user',
            'email'=>Input::get('username')
            );

        DB::table('users')->insert($data);
        return Redirect::to('/login')->with('message', 'berhasil mendaftar');
    }

    public function login(validasilogin $validasilogin)
    {
        if (Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')])) {
            if (Auth::user()->hak_akses=="admin") {
               // echo "admin";
                return Redirect::to('');
            }
            else{
                // echo "user";
                return Redirect::to('user');

            }
        }
        else{
            echo "error login";
        }

    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('login')->with('message', 'Berhasil Logout');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
