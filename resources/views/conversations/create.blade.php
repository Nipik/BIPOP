@extends('layouts.app')

@section('content')
    <h2>Nouvelle Conversation</h2>

    <form action="{{ route('conversations.store') }}" method="post">
        @csrf
        <label for="participants">Participants (séparés par des virgules) :</label>
        <input type="text" name="participants" id="participants" required>
        <button type="submit">Créer Conversation</button>
    </form>
@endsection
