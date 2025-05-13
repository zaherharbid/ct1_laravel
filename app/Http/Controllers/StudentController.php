<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return 'index Student Page';
    }

    function marks()
    {
        return 'marks Student Page';
    }

    function avg()
    {
        return 'avg Student Page';
    }
}
