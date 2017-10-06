<?php
namespace App\Controllers;

use App\Models\Category;

class PagesController
{

    /**
     * Redirect to home page
     */
    public function index()
    {
        return redirect('home', compact('all_categories'));
    }

    /**
     * Home Page
     * @return mixed
     */
    public function home()
    {

        return view('stella');

    }

}