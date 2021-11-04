@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        Nome do pet: {{$pet->name}}<br>
        Raça: {{$pet->breed}}<br>
        Peso: {{$pet->weight}} Kg<br>
        Cor da pelagem: {{$pet->color}} <br>
        Tutor(a): {{$pet->relUsers->name}} <br>
    </div>

@endsection
