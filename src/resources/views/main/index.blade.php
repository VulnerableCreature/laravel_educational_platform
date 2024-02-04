@extends('layout.user-layout')
@section('title', 'Главная')

@section('content')
    <div class="mb-4">
        <livewire:courses.new.course />
    </div>
    <livewire:courses.popular.course />
@endsection
