<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('template');
    }

    public function index1()
    {
        return view('atividade1');
    }
    //
    public function ex1(Request $request)
    {
        $salario = $request->salario;
        $salarionovo = $salario + ($salario *30/100);
        return view('resultadoexercicio1',compact('salario','salarionovo'));
    }
    public function index2()
    {
        return view('atividade2');

    }
    public function ex2(Request $request)
    {
        $salario = $request->salario;
        $salarioa = $salario + ($salario *50/100);
        $salariob = $salario + ($salario *30/100);
        return view('resultadoexercicio2',compact('salario','salarioa','salariob'));
    }
    public function index3()
    {
        return view('atividade3');

    }
    public function ex3(Request $request)
    {
        $numero1= $request->numero1;
        $numero2= $request->numero2;
        $numero3= $request->numero3;
        $resultado1= $numero1 >= $numero2 && $numero1 >= $numero3;
        $resultado2 = $numero2 >= $numero1 && $numero2 >= $numero3;
        return view('resultadoexercicio3',compact('numero1','numero2','numero3','resultado1','resultado2'));
    }
    public function index4()
    {
        return view('atividade4');

    }
    public function ex4(Request $request)
    {
        $chopp= $request->chopp;
        $cobertura= $request->cobertura;
        $pessoas= $request->pessoas;
        $chopp= $chopp * 4.80;
        $cobertura = $cobertura * 1.50;
        $conta = $chopp + $cobertura + 17;
        $contatotal = ($conta * 10/100) + $conta;
        $divisao = $contatotal/$pessoas;
        return view('resultadoexercicio4',compact('chopp','cobertura','pessoas','conta','contatotal','divisao'));
    }
    public function index5()
    {
        return view('atividade5');

    }
    public function ex5(Request $request)
    {
        $salariominimo= $request->salariominimo;
        $horastrabalhadas= $request->horastrabalhadas;
        $dependentes= $request->dependentes;
        $horasextras = $request->horasextras;
        $valorhoratrabalhada=($salariominimo *1)/5;
        $salariomensal=$horastrabalhadas * $valorhoratrabalhada;
        $dependentes = $dependentes * 32;
        $valorhoraextra = ($valorhoratrabalhada *50/100) + $valorhoratrabalhada;
        $salariobruto=$salariomensal + $dependentes + $valorhoraextra;
        if ($salariobruto < 2000 ):
              $IRRF=0;
        $salarioliquido = $salariobruto - $IRRF;
    elseif ($salariobruto >=2000 && $salariobruto <=5000):
            $IRRF=$salariobruto * 10/100;
        $salarioliquido = $salariobruto - $IRRF;
    else:
        $IRRF= $salariobruto * 20/100;
        $salarioliquido = $salariobruto - $IRRF;
    endif;
        if ($salarioliquido <=3500 ):
            $gratificacao = 1000;
        else:
            $gratificacao = 500;
        endif;
        $salarioareceber = $salarioliquido + $gratificacao;
        return view('resultadoexercicio5',compact('salariominimo','horastrabalhadas','dependentes','horasextras','valorhoratrabalhada','salariomensal','valorhoraextra','salariobruto','IRRF','salarioliquido','gratificacao','salarioareceber'));
    }
    public function index6()
    {
        return view('atividade6');

    }
    public function ex6(Request $request)
    {
        $id= $request->id;
        $nota1= $request->nota1;
        $nota2= $request->nota2;
        $nota3= $request->nota3;
        $me= $request->me;
        $ma= ($nota1 + $nota2 *2 +$nota3 *3 + $me)/7;
        return view('resultadoexercicio6',compact('id','nota1','nota2','nota3','me','ma'));
    }
    public function index7()
    {
        return view('atividade7');

    }
    public function ex7(Request $request)
    {
        $altura= $request->altura;
        $sexo= $request->sexo;
        if ($sexo =='f' ):
            $pesoideal = (62.1 * $altura) - 44.7;
        else:
            $pesoideal = (72.7 * $altura) - 58;
        endif;
        return view('resultadoexercicio7',compact('altura','sexo','pesoideal'));
    }
    public function index8()
    {
        return view('atividade8');

    }
    public function ex8(Request $request)
    {
        $salario= $request->salario;
        $codigo= $request->codigo;
        if ($codigo == 101 ):
            $novosalario = ($salario * 5/100) + $salario;
            elseif ($codigo == 102 ):
                $novosalario = ($salario * 7.5/100) + $salario;
        elseif ($codigo == 103 ):
            $novosalario = ($salario * 10/100) + $salario;
        else:
            $novosalario = ($salario * 15/100) + $salario;
        endif;
        $diferenca = $novosalario - $salario;
        return view('resultadoexercicio8',compact('salario','codigo','novosalario','diferenca'));
    }
}

