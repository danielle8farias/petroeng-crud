@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1> <hr>

<div class="col-8 m-auto">
    <form name="formCad" id="formCad" method="post" action="{{url('pets')}}">
        @csrf
        <input class="form-control" type="text" name="name" id="name" placeholder="Nome do pet:"><br>
        <select class="form-control" name="id_user" id="id_user">
            <option value="">Selecione tutor(a)</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        <input class="form-control" type="text" name="breed" id="breed" placeholder="Raça:"><br>
        <input class="form-control" type="text" name="weight" id="weight" placeholder="Peso em Kg:"><br>
        <input class="form-control" type="text" name="color" id="color" placeholder="Cor da pelagem:"><br>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
    </form>
</div>

@endsection
