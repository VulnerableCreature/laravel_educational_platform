@extends('layout.user-layout')
@section('title', "Пользователь | $user->surnameMiddle")

@section('content')
    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="flex flex-col items-start justify-center gap-5 w-full">
            <input type="text" name="surname" value="{{ $user->surname }}"
                   class="w-full px-10 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                   placeholder="Фамилия" spellcheck="true" autofocus>
            @error('surname')
            <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>

                <span class="text-black">{{ $message }}</span>
            </div>
            @enderror

            <input type="text" name="name" value="{{ $user->name }}"
                   class="w-full px-10 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                   placeholder="Имя" spellcheck="true" autofocus>
            @error('name')
            <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>

                <span class="text-black">{{ $message }}</span>
            </div>
            @enderror

            <input type="text" name="middleName" value="{{ $user->middleName }}"
                   class="w-full px-10 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                   placeholder="Отчество" spellcheck="true" autofocus>
            @error('name')
            <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                </svg>

                <span class="text-black">{{ $message }}</span>
            </div>
            @enderror

            <select name="role_id" class="w-full px-10 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]">
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->title }}</option>
                @endforeach
            </select>

            <div class="flex items-center justify-start gap-3">
                <button type="submit" class="p-2 bg-[#6366f1] text-white rounded-md">Обновить</button>
                <a href="{{ route('admin.user.show', $user->id) }}" class="p-2 bg-[#efecff] text-black rounded-md">Назад</a>
            </div>
        </div>
    </form>
@endsection
