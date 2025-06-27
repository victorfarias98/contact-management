@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contatos</h1>

    @auth
        <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Adicionar Contato</a>
    @endauth

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Contato</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td><a href="{{ route('contacts.show', $contact) }}">{{ $contact->name }}</a></td>
                    <td>{{ $contact->contact }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        @auth
                            <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                            </form>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
