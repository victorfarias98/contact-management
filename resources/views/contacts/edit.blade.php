@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Contato</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')

        @include('contacts.partials.form', ['contact' => $contact])

        <button class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
