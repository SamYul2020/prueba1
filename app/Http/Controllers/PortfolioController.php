<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = [

            ['title' => 'Proyecto No.1'],
            ['title' => 'Proyecto No.2'],
            ['title' => 'Proyecto No.3'],
            ['title' => 'Proyecto No.4']



        ];

        return view ('portfolio', compact('portfolio'));

    }

}
