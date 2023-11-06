<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('pegawai');
        if($request->has('search')) {
            $search = $request->get('search');
            $query->where('nama', 'like', "%$search%");
        }
        //mengambil data dari database
        $data['pegawai'] = $query->Paginate(10);

        //menampilkan data ke view
        return view('pegawai.index' , $data);
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $data['nama'] = $request->input('nama');
        $data['jabatan'] = $request->input('jabatan');
        $data['tgl_lahir'] = $request->input('tgl_lahir');
        $data['alamat'] = $request->input('alamat');

        DB::table('pegawai')->insert($data);

        return redirect('/pegawai');
    }

    public function show(string $id)
    {
        $data['pegawai'] = DB::table('pegawai')->where('id' , $id)->first();

        return view('pegawai.show' , $data);
    }

    public function edit(string $id)
    {
        $data['id'] = $id;
        $data['pegawai'] = DB::table('pegawai')->where('id' , $id)->first();

        return view('pegawai.edit' , $data);
    }

    public function update(Request $request , string $id)
    {
        $data['nama'] = $request->input('nama');
        $data['jabatan'] = $request->input('jabatan');
        $data['tgl_lahir'] = $request->input('tgl_lahir');
        $data['alamat'] = $request->input('alamat');

        DB::table('pegawai')->where('id' , $id)->update($data);

        return redirect('/pegawai');
    }

    public function destroy(string $id)
    {
        DB::table('pegawai')->where('id' , $id)->delete();

        return redirect('/pegawai');
    }
} 
