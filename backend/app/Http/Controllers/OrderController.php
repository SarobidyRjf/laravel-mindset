<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index() 
    {
        return "Listes des produits";
    }

    public function show(int $id)
    {
        return "ID Produits" . $id;
    }

    public function store(Request $request)
    {
        return "Poduits enregistrée";
    }
}
