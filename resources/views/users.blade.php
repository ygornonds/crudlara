@extends('master')

@section('content')

<a href="{{ route('users.create') }}">Cadastrar</a>
<a href="{{ route('home.index') }}" class="btn btn-primary">Ir para Home</a>

<hr>

<h2>Lista de Usuários</h2>

<ul>
@foreach ($users as $user)
    <li>{{ $user->name }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a>  | <a href="{{route('users.show', ['user' => $user->id])}}">Detalhes</a>
@endforeach
</ul>


@endsection
