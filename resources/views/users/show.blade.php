@extends('layouts.app')

@section('title', 'Dados do Usuários')

@section('content')
    <h1>Dados do Usuaŕio {{ $user->name }} </h1>

    <ul>
        <li> {{ $user->name }} </li>
        <li> {{ $user->email }} </li>
    </ul>

    <form action=" {{ route('users.destroy', $user->id) }} " method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Excluir</button>
    </form>
@endsection
