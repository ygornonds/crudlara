@extends('master')
@section('content')

<h2>Cadastro</h2>
@if (session()->has('message'))
{{session()->get('message')}}

@endif

<form action="{{route('users.store')}}" method="POST">
@csrf

<input type="text" name="name" placeholder="Seu Nome" >
<input type="text" name="email" placeholder="Seu Email" >
<input type="text" name="password" placeholder="Sua Senha" >
<button type="submit">Cadastrar</button>
</form>
@endsection