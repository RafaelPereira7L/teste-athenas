<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use App\Models\Category;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::with('category')->paginate(5);
        return view('index', [
            'persons' => $persons
        ]);
    }

    public function show(Person $person)
    {
        return view('person', [
            'person' => $person
        ]);
    }

    public function create() {
        return view('person_create', [
            'categories' => Category::all()
        ]);
    }

    public function store(PersonStoreRequest $request) {
        $input = $request->validated();

        Person::create($input);

        return redirect()->route('person.index');
    }

    public function edit(Person $person) {
        return view('person_edit', [
            'person' => $person,
            'categories' => Category::all()
        ]);
    }

    public function update(Person $person, PersonStoreRequest $request) {
        $input = $request->validated();
        $person = Person::find($person['id']);
        $person->fill($input);
        $person->save();
        return redirect()->route('person.show', $person)->with('success', 'Pessoa atualizada com sucesso!');
    }

    public function destroy(Person $person) {
        $person->delete();
        return redirect()->route('person.index')->with('success', 'Pessoa deletada com sucesso!');
    }

}
