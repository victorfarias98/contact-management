@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Contato</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        @include('contacts.partials.form', ['contact' => null])

        <button class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
