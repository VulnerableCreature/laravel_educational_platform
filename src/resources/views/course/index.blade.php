@extends('layout.user-layout')
@section('title', 'Все курсы')

@section('content')
    @include('includes.success-message')
    <section class="py-4">
        @can('view-teacher', auth()->user())
        <div class="flex items-center justify-end mb-2">
            <a href="{{ route('course.create') }}"
               class="border px-2 py-1 rounded-md flex items-center gap-2 bg-[#6366f1] text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                </svg>

                <span class="font-regular text-sm">Добавить</span>
            </a>
        </div>
        @endcan
        <div class="flex flex-col">
            @forelse($courses as $course)
                <a href="{{ route('course.show', $course->id) }}"
                   class="flex flex-col gap-1 px-2 py-3 rounded-xl hover:bg-[#efecff]">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <x-avatar text="{{ $course->firstLetter }}" color="white"/>
                            <div class="flex flex-col">
                                <span class="text-md font-medium">{{ $course->title }}</span>
                                <span class="text-sm font-regular">{{ $course->course_teacher()?->first()?->fullName ?? 'Отсутствует' }}</span>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                        </svg>
                    </div>
                </a>
            @empty
                @include('includes.no-data')
            @endforelse
        </div>
    </section>
@endsection
