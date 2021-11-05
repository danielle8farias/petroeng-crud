@extends('templates.template')

@section('content')
<h1 class="text-center">@if(@isset($pet))Editar @else Cadastrar @endif</h1> <hr>

<div class="col-8 m-auto">
    @if (isset($errors) && count($errors)>0 )
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach ($errors->all() as $erro)
                {{$erro}}
            @endforeach
        </div>
    @endif

    @if (isset($pet))
        <form name="formEdit" id="formEdit" method="post" action="{{url("pets/$pet->id")}}">
            @method(PUT)
    @else
        <form name="formCad" id="formCad" method="post" action="{{url("pets")}}">
    @endif
        @csrf
        <input class="form-control" type="text" name="name" id="name" placeholder="Nome do pet:" value="{{$pet->name ?? ''}}" required><br>
        <select class="form-control" name="id_user" id="id_user" required>
            <option value="{{$pet->relUsers->id ?? ''}}">{{$pet->relUsers->name ?? 'Escolha o Tutor(a)'}}</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        <input class="form-control" type="text" name="breed" id="breed" placeholder="Raça:" value="{{$pet->breed ?? ''}}" required><br>
        <input class="form-control" type="text" name="weight" id="weight" placeholder="Peso em Kg:" value="{{$pet->weight ?? ''}}" required><br>
        <input class="form-control" type="text" name="color" id="color" placeholder="Cor da pelagem:" value="{{$pet->color ?? ''}}" required><br>
        <input class="btn btn-primary" type="submit" value="@if(@isset($pet))Editar @else Cadastrar @endif">
    </form>
</div>

@endsection
