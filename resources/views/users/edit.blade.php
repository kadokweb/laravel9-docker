@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar dados do Usuário {{ $user->name }} </h1>

    @if ($errors->any())

        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error"> {{ $error }} </li>
            @endforeach
        </ul>
    @endif

    <form action=" {{ route('users.update', $user->id) }} " method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="E-mail" value=" {{ $user->email }} ">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Editar</button>
    </form>

@endsection
