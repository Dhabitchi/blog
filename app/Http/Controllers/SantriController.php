<?php

namespace App\Http\Controllers;

use App\santri;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = santri::all();
        return view('tpq.santri', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tpq.createsantri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        santri::create($request->only(['nama', 'kelas', 'jilid']));

        return redirect()->route('santri');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Factory|View
     */
    public function edit(santri $santri)
    {
        return view('tpq.editsantri', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, santri $santri)
    {
        $santri->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jilid' => $request->jilid
        ]);
        return redirect()->route('santri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(santri $data)
    {
        $data->delete();
        return redirect()->route('santri')->with('alert-succes', 'Data berhasil dihapus!');
    }
}
