<?php
//namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function home()
    {

        return view('index');

    }

    public function important()
    {

        return view('important');

    }





    public function about()
    {

        return view('about');

    }


}