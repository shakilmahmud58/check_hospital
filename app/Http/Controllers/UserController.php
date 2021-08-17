<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome()
    {
        return Inertia::render('Welcome');
    }
    public function doctor()
    {
        return Inertia::render('Doctors');
    }
    public function ambul()
    {
        return Inertia::render('Ambulance');
    }
    public function covid()
    {
        return Inertia::render('Covid');
    }
    public function seat()
    {
        return Inertia::render('Seat');
    }
    public function loc()
    {
        $ip = request()->ip();
        //$ip= 8;
        return Inertia::render('Location',['ip'=>$ip]);
    }
}
