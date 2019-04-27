<?php

namespace App\Http\Controllers;

use App\ContaBanco;
use Illuminate\Http\Request;

class Conta_BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conta_bancos = ContaBanco::all();
        return view('conta_banco.index',compact('conta_bancos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conta_banco = new ContaBanco();
        return view('conta_banco.formulario',compact('conta_banco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conta_banco = new ContaBanco();
        if($request->id){
            $conta_banco = $conta_banco->find($request->id);
        }
        $conta_banco->fill($request->all());
        $conta_banco->save();
        return redirect('conta_banco');
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
        $conta_banco = ContaBanco::find($id);
        return view('conta_banco.formulario',compact('conta_banco'));
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
        $conta_banco = ContaBanco::find($id);
        $conta_banco->delete();
        return redirect('conta_banco');
    }
}
