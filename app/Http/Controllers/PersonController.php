<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::with('category')->get();
        return view('home', [
            'persons' => $persons
        ]);
    }

    public function show(Person $person)
    {
        return view('person', [
            'person' => $person
        ]);
    }
}
