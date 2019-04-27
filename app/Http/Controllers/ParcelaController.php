<?php

namespace App\Http\Controllers;

use App\Parcela;
use Illuminate\Http\Request;

class ParcelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcelas = Parcela::all();
        return view('parcela.index',compact('parcelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parcela = new Parcela();
        return view('parcela.formulario',compact('parcela'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parcela = new Parcela();
        if($request->id){
            $parcela =  $parcela->find($request->id);
        }
        $parcela->fill($request->all());
        $parcela->save();

        return redirect('parcela');
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
        $parcela = Parcela::find($id);
        return view('parcela.formulario',compact('parcela'));
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
        $parcela = Parcela::find($id);
        $parcela->delete();
        return redirect('parcela');
    }
}
