<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\User;

class CarsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function storeCar(Request $request) {
        $car = new Cars();
        $car->make = $request->make;
        $car->model = $request->model;
        $car->number = $request->number;
        $car->gmail = $request->gmail;
        $car->save();

        return $car;
    }

    public function getCars(Request $request) {
        $cars = Cars::all();

        return $cars;
    }
    public function deleteCar(Request $request){
        $car = Cars::find($request->id)->delete();
    }

    public  function editCar(Request $request, $id){
        $car = Cars::where('id',$id)->first();

        $car->make = $request->get('val_1');
        $car->model = $request->get('val_2');
        $car->number = $request->get('val_3');
        $car->gmail = $request->get('val_4');
        $car->save();

        return $car;
    }
}

