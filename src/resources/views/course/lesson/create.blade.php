@extends('layout.user-layout')
@section('title', 'Создание материала')

@section('content')
    <form action="{{ route('course.lesson.store', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col items-start justify-center gap-5 w-full">
            <input type="text" name="title"
                   class="w-full px-10 border-gray-300 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                   placeholder="Заголовок материала" spellcheck="true" autofocus>
            @error('title')
            <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                </svg>

                <span class="text-black">{{ $message }}</span>
            </div>
            @enderror

            <textarea name="description"
                      class="w-full border-gray-300 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                      placeholder="Краткое содержание материала" rows="7"></textarea>
            @error('description')
            <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                </svg>

                <span class="text-black">{{ $message }}</span>
            </div>
            @enderror
            <div class="w-full flex flex-col justify-center gap-2">
                <input type="file" name="files"
                       class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                       placeholder="Заголовок материала">
                <p class="text-sm text-gray-500">Допустимый формат файлов: pdf, docx</p>
                @error('files')
                <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                    </svg>

                    <span class="text-black">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="flex items-center justify-start gap-3">
                <button type="submit" class="p-2 bg-[#6366f1] text-white rounded-md">Сохранить</button>
                <a href="{{ route('course.show', $course->id) }}" class="p-2 bg-[#efecff] text-black rounded-md">Назад</a>
            </div>
        </div>
    </form>
@endsection
