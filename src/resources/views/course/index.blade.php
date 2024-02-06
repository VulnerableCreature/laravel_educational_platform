@extends('layout.user-layout')
@section('title', 'Все курсы')

@section('content')
    <section class="py-4">
        <div class="flex flex-col">
            @forelse($courses as $course)
                <a href="{{ route('course.show', $course->id) }}" class="flex flex-col gap-1 px-2 py-3 rounded-xl hover:bg-[#efecff]">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <x-avatar text="{{ $course->firstLetter }}" color="white" />
                            <div class="flex flex-col">
                                <span class="text-md font-medium">{{ $course->title }}</span>
                                <span class="text-sm font-regular">Ким Виктор Валериянович</span>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>
                </a>
            @empty
                <span>Not found</span>
            @endforelse
        </div>
    </section>
@endsection
