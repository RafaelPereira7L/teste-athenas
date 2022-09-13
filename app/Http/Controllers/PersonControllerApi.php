<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use App\Models\Category;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonControllerApi extends Controller
{
    /**
     * @OA\Get(
     *      tags={"/"},
     *      summary="Obter todas as pessoas",
     *      description="Obter todas as pessoas e suas categorias associadas",
     *      path="/",
     *      security={{"bearerAuth":{}}},
     *
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Página a ser exibida",
     *         required=false,
     * ),
     *
     *      @OA\Response(
     *          response=200, description="Lista de pessoas",
     *      )
     * )
     *
     * @return Person[]|\Illuminate\Database\Eloquent\Collection
     */

    public function index()
    {
        $persons = Person::with('category')->paginate(5);
        return $persons;
    }

    /**
     * @OA\Get(
     *      tags={"/{person_id}"},
     *      summary="Obter pessoa pelo ID",
     *      description="Obter pessoa pelo ID e sua categoria associada",
     *      path="/{person_id}",
     *      security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *        name="person_id",
     *        in="path",
     *        description="ID da pessoa",
     *        required=true,
     * ),
     *
     *      @OA\Response(
     *          response=200, description="Obter pessoa pelo ID",
     *      )
     * )
     *
     * @return Person[]|\Illuminate\Database\Eloquent\Collection
     */


    public function show(Person $person)
    {
        return $person;
    }

    /**
     * @OA\Post(
     *      tags={"/"},
     *      summary="Registrar pessoa",
     *      description="Registrar pessoa e sua categoria associada",
     *      path="/",
     *      security={{"bearerAuth":{}}},
     *
     *      @OA\Response(
     *          response=201, description="Registrar pessoa",
     *      )
     * )
     *
     * @return Person[]|\Illuminate\Database\Eloquent\Collection
     */

    public function store(PersonStoreRequest $request) {
        $input = $request->validated();

        Person::create($input);

        return redirect()->route('person.index');
    }

        /**
     * @OA\Put(
     *      tags={"/{person_id}"},
     *      summary="Editar pessoa pelo ID",
     *      description="Editar pessoa e sua categoria associada",
     *      path="/",
     *      security={{"bearerAuth":{}}},
     *    @OA\Parameter(
     *      name="person_id",
     *      in="path",
     *      description="ID da pessoa",
     *      required=true,
     * ),
     *
     *      @OA\Response(
     *          response=202, description="Pessoa atualizada com sucesso!",
     *      )
     * )
     *
     * @return Person[]|\Illuminate\Database\Eloquent\Collection
     */

    public function update(Person $person, PersonStoreRequest $request) {
        $input = $request->validated();
        $person = Person::find($person['id']);
        $person->fill($input);
        $person->save();
        return [
            'status' => 'success',
            'message' => 'Pessoa atualizada com sucesso!',
            'person' => $person,
        ];
    }

    /**
     * @OA\Delete(
     *      tags={"/{person_id}/delete"},
     *      summary="Deletar pessoa pelo ID",
     *      description="Deletar pessoa pelo ID",
     *      path="/{person_id}/delete",
     *      security={{"bearerAuth":{}}},
     *
     *    @OA\Parameter(
     *     name="person_id",
     *     in="path",
     *     description="ID da pessoa",
     *     required=true,
     * ),
     *      @OA\Response(
     *          response=202, description="Pessoa deletada com sucesso!",
     *      )
     * )
     *
     * @return Person[]|\Illuminate\Database\Eloquent\Collection
     */

    public function destroy(Person $person) {
        if(!$person->empty()) {
            $person->delete();
            return [
                'status' => 'success',
                'message' => 'Pessoa deletada com sucesso!',
                'person' => $person,
            ];
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Pessoa não encontrada!',
        ], 404);
    }

}
