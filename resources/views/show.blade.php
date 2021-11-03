@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
            $user=$pet->find($pet->id)->relUsers;
        @endphp
        Nome do pet: {{$pet->name}}<br>
        Raça: {{$pet->breed}}<br>
        Peso: {{$pet->weight}} Kg<br>
        Cor da pelagem: {{$pet->color}} <br>
        Tutor(a): {{$user->name}} <br>
    </div>

@endsection
