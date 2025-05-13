<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('index');   //resourses/views/index {php, html}
    }

    function about()
    {
        return ('about Page');
    }

    function contact()
    {
        return ('contact Page');
    }

    function team()
    {
        return ('team Page');
    }

    function blog()
    {
        return ('blog Page');
    }
    function courses($id, $name = null)
    {
        if ($name) {
            return "the id of the course is $id and the name is $name";
        }
        return "the Course_id is $id";
    }
}
