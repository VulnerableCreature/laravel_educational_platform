@extends('layout.user-layout')
@section('title', 'Все курсы')

@section('content')
    <section class="py-4">
        <div class="flex flex-col">
            @for ($i = 0; $i < 5; $i++)
                <livewire:courses.course-item />
            @endfor
        </div>
    </section>
@endsection
