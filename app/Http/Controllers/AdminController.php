<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    function index(){
        return 'index Admin Page';
    }

    function posts(){
        return 'posts Admin Page';
    }

    function products(){
        return 'products Admin Page';
    }

    

}