<?php

namespace App\Http\Controllers;

use App\santri;
use  App\ustad;
use Illuminate\Http\Request;

class ustadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $utd = ustad::all();

        return view('tpq.indexustad',compact('utd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('tpq.createustad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        ustad::create($request->only(['nama','ustad']));

        return redirect()->route('ustad');
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ustad $data)
    {
        return view('tpq.editustad',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, ustad $data)
    {
        $data->update([
            'nama' => $request->nama,
            'ustad' => $request->ustad
        ]);
        return redirect()->route('ustad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ustad $data)
    {
        $data->delete();
        return redirect()->route('ustad')->with('alert-succes', 'Data berhasil dihapus!');
    }
}
