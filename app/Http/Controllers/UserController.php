<?php

namespace App\Http\Controllers;

use App\Http\Request\PetRequest;
use App\Models\ModelPet;
use App\Models\User;

class UserController extends Controller
{

    private $objUser;
    private $objPet;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objPet = new ModelPet();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pet = $this->objPet->all()->sortBy('name');

        $pets = ModelPet::all();

        return view("index", [
            'pets' => $pets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('create', [
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PetRequest $request)
    {
        $pet = new ModelPet();

        $pet->name = $request->name;
        $pet->breed = $request->breed;
        $pet->weight = $request->weight;
        $pet->color = $request->color;
        $pet->id_user = $request->id_user;

        $pet->save();
        return $pet;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet=ModelPet::find($id);
        return view('show', [
            'pet' => $pet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet=ModelPet::find($id);
        $pet=ModelPet::all();
        return view('create', compact('pet', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PetRequest $request)
    {
        $pet=ModelPet::findOrFail($request->id);

        $pet->name = $request->name;
        $pet->breed = $request->breed;
        $pet->weight = $request->weight;
        $pet->color = $request->color;
        $pet->id_user = $request->id_user;

        $pet->save();
        return $pet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pet=ModelPet::destroy($request->id);
        return $pet;

    }
}
