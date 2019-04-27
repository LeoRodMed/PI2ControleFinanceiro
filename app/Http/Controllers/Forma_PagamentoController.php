<?php

namespace App\Http\Controllers;

use App\FormaPagamento;
use Illuminate\Http\Request;

class Forma_PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forma_pagamentos = FormaPagamento::all();
        return view('forma_pagamento.index',compact('forma_pagamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forma_pagamento = new FormaPagamento();
        return view('forma_pagamento.formulario',compact('forma_pagamento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forma_pagamento = new FormaPagamento();
        if($request->id){
            $forma_pagamento =  $forma_pagamento->find($request->id);
        }
        $forma_pagamento->fill($request->all());
        $forma_pagamento->save();
        return redirect('forma_pagamento');
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
        $forma_pagamento = FormaPagamento::find($id);
        return view('forma_pagamento.formulario',compact('forma_pagamento'));
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
        $forma_pagamento = FormaPagamento::find($id);
        $forma_pagamento->delete();
        return redirect('forma_pagamento');
    }
}
