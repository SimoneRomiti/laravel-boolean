<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('homepage', ['cars' => $cars]);
    }

    public function show($id){
        $carDetail = Car::all()
            ->where('id', '=', $id);
        return view('detail', ['id' => $id, 'carDetail' => $carDetail]);
    }
}

