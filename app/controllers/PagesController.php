<?php
namespace App\Controllers;

use App\Models\Category;

class PagesController
{

    public function index()
    {


        return redirect('home', compact('all_categories'));

    }

    public function home()
    {
        $category = new Category('store', 'categories');

        $all_categories = $category->all([],['name'=>1,'categories.name'=>1,'categories.categories.name'=>1, '_id'=>0]);

        return view('home', compact('all_categories'));

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