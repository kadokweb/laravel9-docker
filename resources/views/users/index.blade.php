@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>
        Listagem de usuários
        ( <a href=" {{ route('users.create') }} ">+</a> )
    </h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>Nome: {{ $user->name }}
                -- Email: {{ $user->email }} |
                <a href=" {{ route('users.edit', $user->id) }} ">Editar</a> |
                <a href=" {{ route('users.show', $user->id) }} ">Detalhes</a> |
                <form style="display: inline" action=" {{ route('users.destroy', $user->id) }} " method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
