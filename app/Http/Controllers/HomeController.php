<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function test1()
    {
        $codigoEspecial = "2ea5638195ff924a6d69";
        return view('landingi')
            ->with('codigoEspecial' , $codigoEspecial);
    }

    public function test2()
    {
        $codigoEspecial = "01c328ee4177a37c4989";
        return view('landingi')
            ->with('codigoEspecial' , $codigoEspecial);
    }
}
