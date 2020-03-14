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
     * @return Factory|View
     */
    public function index()
    {

        $data = santri::orderBy('nama')->paginate(10);
        return view('tpq.santri', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('tpq.createsantri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        santri::create($request->only(['nama', 'kelas', 'jilid','lahir','tempat']));

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
            'jilid' => $request->jilid,
            'lahir' => $request->lahir,
            'tempat' => $request->tempat
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


    public function cari(Request $request){
        $cari = $request->cari;

        $santri = santri::Where('nama','like',"%".$cari."%")->paginate(10);

        return view('tpq.santri',['data'=>$santri]);
    }
}
