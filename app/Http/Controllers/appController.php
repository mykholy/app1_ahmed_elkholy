<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function welcome()
    {
        return view('welcome');

    }

    public function customers()
    {
        $customers=[
            ['name'=>'ahmed'],
            ['name'=>'Ali'],
            ['name'=>'Mostafa'],
            ['name'=>'Aya'],

        ];


        return view('customers',compact('customers'));

    }

    public function contact_us()
    {
        return view('contact_us');

    }

    public function about_us()
    {
        return view('about_us');

    }

    public function profile($name)
    {
        return view('profile',compact('name'));

    }
}
