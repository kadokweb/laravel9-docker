@extends('layouts.app')

@section('title', 'Dados do Usuários')

@section('content')
    <h1>Dados do Usuaŕio {{ $user->name }} </h1>

    <ul>
        <li> {{ $user->name }} </li>
        <li> {{ $user->email }} </li>
    </ul>
@endsection
