<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\returnSelf;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman  Home 
        $laporan = laporan::orderBy('nik', 'asc')->get();
        $no = 1;
        return view('laporan.index', compact('laporan', 'no'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman tambah
        return view('laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan tambah 

        Session::flash('nik', $request->nik);
        Session::flash('nama_pelapor', $request->nama_pelapor);
        Session::flash('judul_laporan', $request->judul_laporan);
        Session::flash('tgl_kejadian', $request->tgl_kejadian);
        Session::flash('isi_laporan', $request->isi_laporan);


        $request->validate(
            [
                'nik' => 'required|numeric|unique:laporan,nik',
                'nama_pelapor' => 'required',
                'jl' => 'required',
                'judul_laporan' => 'required',
                'tgl_kejadian' => 'required',
                'isi_laporan' => 'required'
            ],
            [
                'nik.required' => 'NIK tidak boleh kosong!',
                'nik.numeric' => 'NIK harus diisi dalam bentuk angka',
                'nik.unique' => 'NIK sudah ada sebelumnya',
                'nama_pelapor.required' => 'Nama Pelapor tidak boleh kosong!',
                'jl.required' => 'Jenis Laporan tidak boleh kosong!',
                'judul_laporan.required' => 'Judul Laporan tidak boleh kosong!',
                'tgl_kejadian.required' => 'Tanggal Kejadian tidak boleh kosong!',
                'isi_laporan.required' => 'Isi Laporan tidak boleh kosong!'
            ]
        );

        $data = [
            'nik' => $request->nik,
            'nama_pelapor' => $request->nama_pelapor,
            'jl' => $request->jl,
            'judul_laporan'=> $request->judul_laporan,
            'tgl_kejadian' => $request->tgl_kejadian,
            'isi_laporan' => $request->isi_laporan
        ];
        laporan::create($data);
            return redirect('/laporan')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman detail
        return view('laporan.tentang');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman edit
        return view('laporan.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Proses simpan edit
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Proses hapus
    }
    }

