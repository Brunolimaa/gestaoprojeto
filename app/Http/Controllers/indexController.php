<?php
/**
 * Created by PhpStorm.
 * User: brunopereira
 * Date: 9/1/2017
 * Time: 1:03 PM
 */

namespace Projeto\Http\Controllers;


class indexController extends Controller
{
    public function index()
    {
        return view('layout');
    }
    
    public function teste()
    {
        return view('painel');
    }
}