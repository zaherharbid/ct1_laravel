<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index() {
        return 'index Teacher Page';
    }

    function marks() {
        return 'marks Teacher Page';
    }

    function avg() {
        return 'avg Teacher Page';
    }

    
}