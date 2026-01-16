<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonController extends Controller
{
    //
    public function index()
    {
        return "Listes des produits";
    }

    public function show($id)
    {
        return "Produits ID: " . $id;
    }
}
