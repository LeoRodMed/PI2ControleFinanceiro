<?php

namespace App\Http\Controllers;

use App\Baixa;
use Illuminate\Http\Request;

class BaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baixas = Baixa::all();
        return view('baixa.index',compact('baixas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $baixa = new Baixa();
        return view('baixa.formulario',compact('baixa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baixa = new Baixa();
        if($request->id){
            $baixa = $baixa->find($request->id);
        }
        $baixa->fill($request->all());
        $baixa->save();
        return redirect('baixa');
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
        $baixa = Baixa::find($id);
        return view('baixa.formulario',compact('baixa'));
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
        $baixa= Baixa::find($id);
        $baixa->delete();
        return redirect('baixa');
    }
}
