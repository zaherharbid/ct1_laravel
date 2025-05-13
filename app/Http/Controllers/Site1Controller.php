<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    function index()
    {
        return view('site1.index');
    }

    function about()
    {
        return view('site1.about');
    }

    function contact()
    {
        return view('site1.contact');
    }

    function contact_data()
    {
        return view('site1.contact_data');
    }
    function username($username, $age = null)
    {
        // return view('site1.username')->with('username', $username)->with('age', $age);
        // return view('site1.username', ['username' => $username, 'age' => $age]);
        // dd(compact('username', 'age'));
        return view('site1.username', compact('username', 'age'));
    }
    function students($teacher)
    {
        $all_students = [
            'khairy' => ['abed', 'mohammed', 'zaher'],
            'sami' => ['nashat', 'hamada'],
            'shadi' => ['ahed', 'tahseen', 'mohammed'],
            'zaher' => ['bashar']
        ];
        $students = [];
        if (isset($all_students[$teacher]))
            $students =  $all_students[$teacher];
        // dd($students);
        return view('site1.students', compact('teacher', 'students'));
    }
}
