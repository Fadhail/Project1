<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|integer|unique:mahasiswas',
            'name' => 'required|string',
            'email' => 'required|string',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
                         ->with('success','Mahasiswa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show',compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'npm' => 'required|integer|unique:mahasiswas,npm,'.$mahasiswa->npm,
            'name' => 'required|string',
            'email' => 'required|string',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
        ]);

        // Update the Mahasiswa record with the validated data
        $mahasiswa->update($validatedData);

        // Redirect the user back to the index page or wherever you want
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success','Mahasiswa deleted successfully');
    }
}
