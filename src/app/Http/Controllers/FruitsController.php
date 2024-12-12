<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruits;

class FruitsController extends Controller
{
    public function index()
    {
        $fruits = Fruits::paginate();
        return view('index', ['fruits' => $fruits]);
    }
}
