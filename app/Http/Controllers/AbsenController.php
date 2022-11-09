<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Http\Requests\StoreAbsenRequest;
use App\Http\Requests\UpdateAbsenRequest;

class AbsenController extends Controller
{
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
        return view('absen.absen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAbsenRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAbsenRequest $request)
    {

        if (!auth()->check()) {
            return redirect()->back()->with("error", "Belum login");
        }

        if (auth()->user()->role != 'pegawai') {
            return redirect()->back()->with("error", "Ini bukan pegawai");
        }

        $hourNow = now()->hour;
        if ($hourNow > 8) {
            return redirect()->back()->with("error", "sudah melewati batas absen");
        }

        Absen::create([
            'status' => 'hadir',
            'user_id' => auth()->id()
        ]);

        return redirect()->back()->with("success", auth()->user()->name . " berhasil absen");
    }

}
