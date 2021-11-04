@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1> <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{ route('create') }}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do pet</th>
                <th scope="col">Tutor(a)</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($pet as $pets)
                    @php
                        $user=$pets->find($pets->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$pets->id}}</th>
                        <td>{{$pets->name}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            <a href="{{ route('show', ['pets' => $pets->id]) }}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>

@endsection
