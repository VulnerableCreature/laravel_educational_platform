@extends('layout.app')
@section('title', 'Главная')

@section('content')
    main

    <form action="{{ route('auth.delete') }}" method="POST">
        @csrf
        <button type="submit">Exit</button>
    </form>
@endsection
