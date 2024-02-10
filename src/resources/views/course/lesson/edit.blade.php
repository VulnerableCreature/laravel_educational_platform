@extends('layout.user-layout')
@section('title', "Курс | $course->title")

@section('content')
    <form action="{{ route('course.lesson.update', [$course->id, $material->id]) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="flex flex-col items-start justify-center gap-5 w-full">
            <div class="w-full flex flex-col justify-center gap-2">
                <label for="title" class="font-medium">Заголовок</label>
                <input type="text" name="title" id="title"
                       class="w-full px-10 border-gray-300 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                       placeholder="Заголовок материала" spellcheck="true" value="{{ $material->title }}">
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
            </div>


            <div class="flex flex-col justify-center gap-2 w-full">
                <label for="description" class="font-medium">Описание</label>
                <textarea name="description" id="description"
                          class="w-full border-gray-300 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                          placeholder="Краткое содержание материала" rows="7">{{ $material->description }}</textarea>
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
            </div>

            <div class="w-full flex flex-col justify-center gap-2">
                <label for="file" class="font-semibold">Файл</label>
                <input type="file" name="files" id="file"
                       class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                       placeholder="Заголовок материала">
                <p class="text-sm text-gray-500">Допустимый формат файлов: pdf, docx</p>

                <div class="flex items-center gap-4">
                    <span class="font-medium text-md truncate">Текущий файл:</span>
                    @if(is_null($material->file_path))
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636"/>
                        </svg>
                    @else
                        <a href="{{ url('/storage/'. $material->file_path) }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                            </svg>
                        </a>
                    @endif
                </div>
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
            <div class="w-full flex flex-col justify-center gap-2">
                <label for="select_visible">Видимость материала</label>
                <select name="isVisible" id="select_visible"
                        class="w-full rounded-md border-gray-300 placeholder:text-gray-500 pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]">
                    @foreach($visible as $key => $value)
                        <option
                            value="{{ $key }}" {{ $key == $material->isVisible ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-start gap-3">
                <button type="submit" class="p-2 bg-[#6366f1] text-white rounded-md">Сохранить</button>
                <a href="{{ route('course.show', $course->id) }}"
                   class="p-2 bg-[#efecff] text-black rounded-md">Назад</a>
            </div>
        </div>
    </form>
@endsection
