@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Contato</h1>

    <p><strong>Nome:</strong> {{ $contact->name }}</p>
    <p><strong>Contato:</strong> {{ $contact->contact }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>

    @auth
        <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Editar</a>

        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
        </form>
    @endauth

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>
@endsection
