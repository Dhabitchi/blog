<?php

namespace App\Http\Controllers;

use App\TPQ;
use Illuminate\Http\Request;

class TPQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tpq = TPQ::all();
        return view('tpq.index',['tpq'=> $tpq] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tpq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TPQ::create($request -> all());

        return redirect()->route('TPQ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TPQ  $tPQ
     * @return \Illuminate\Http\Response
     */
    public function show(TPQ $tPQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TPQ  $tPQ
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(TPQ $tpq)
    {
        return view('tpq.edit',['tpq'=>$tpq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TPQ  $tPQ
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, TPQ $tpq)
    {
        TPQ::where('k_id',$tpq->k_id)
            ->update([
                'k_kode' => $request->k_kode,
                'k_nama' => $request->k_nama
            ]);
            return redirect('/tpq');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TPQ  $tPQ
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(TPQ $tpq)
    {
        $tpq -> delete();
        return redirect()->route('TPQ')->with('alert-succes','Data berhasil dihapus!');
    }
}
