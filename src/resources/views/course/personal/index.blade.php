@extends('layout.user-layout')
@section('title', 'Мои курсы')

@section('content')
    <div class="flex flex-col">
        @can('view-student', auth()->user())
            @forelse($course_users as $course_user)
                <a href="{{ route('course.show', $course_user->id) }}"
                   class="flex flex-col gap-1 px-2 py-3 rounded-xl hover:bg-[#efecff]">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <x-avatar text="{{ $course_user->firstLetter }}" color="white"/>
                            <div class="flex flex-col">
                                <span class="text-md font-medium">{{ $course_user->title }}</span>
                                <span
                                    class="text-sm font-regular">{{ $course_user->course_teacher()?->first()->fullName ?? 'Отсутствует' }}</span>
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
        @endcan
            @can('view-teacher', auth()->user())
                @forelse($course_teachers as $course_teacher)
                    <a href="{{ route('course.show', $course_teacher->id) }}"
                       class="flex flex-col gap-1 px-2 py-3 rounded-xl hover:bg-[#efecff]">
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <x-avatar text="{{ $course_teacher->firstLetter }}" color="white"/>
                                <div class="flex flex-col">
                                    <span class="text-md font-medium">{{ $course_teacher->title }}</span>
                                    <span
                                        class="text-sm font-regular">{{ $course_teacher->course_teacher()?->first()->fullName ?? 'Отсутствует' }}</span>
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
            @endcan
    </div>
@endsection
