@extends('master')
@section('content')

<h2>home</h2>
<a href="{{ route('users.index') }}" class="btn btn-primary">Ir para Usuários</a>

@endsection