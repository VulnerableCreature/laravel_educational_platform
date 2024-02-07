@extends('layout.user-layout')
@section('title', 'Создание курса')

@section('content')
    <form>
        <div class="flex flex-col items-start justify-center gap-5 w-full">
            <div class="relative rounded-md shadow-sm w-full">
                <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor"
                         class="w-5 h-5 stroke-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                    </svg>

                </div>
                <input type="text" name="title"
                       class="min-w-full px-10 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                       value="{{ old('title') }}" placeholder="Название курса" spellcheck="true" autofocus>
            </div>
            <textarea
                class="w-full px-10 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                placeholder="Добавьте описание курса"></textarea>
            <div class="flex items-center justify-start gap-3">
                <button type="submit" class="p-2 bg-[#6366f1] text-white rounded-md">Сохранить</button>
                <a href="{{ route('course.index') }}" class="p-2 bg-[#efecff] text-black rounded-md">Назад</a>
            </div>
        </div>
    </form>
@endsection
