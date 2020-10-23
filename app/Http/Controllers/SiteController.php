<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreFormRequest;
use Inertia\Inertia;

class SiteController extends Controller
{


    public function home(){

        return Inertia::render('Home', [
        ]);
    }

    public function form(){

        return Inertia::render('Form', [
        ]);
    }


    public function formHandler(StoreFormRequest $request){


        dd('hi');

        return redirect()->to('/form-complete');
    }




}
