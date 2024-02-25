@extends('layout.user-layout')
@section('title', "Профиль | $user->surnameMiddle")

@section('content')
    @include('includes.success-message')
    <section class="flex flex-col items-start justify-start gap-8 mt-3">
        <div class="w-full flex items-center justify-start gap-3">
            <a href="{{ route('main.index') }}" class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
                </svg>

                <span class="hidden md:block text-lg font-regular">Вернуться назад</span>
            </a>
        </div>
        <x-tab selected="Информация">
            <x-tab.items tab="Информация">
                <div class="flex gap-12 mb-3">
                    <div class="hidden lg:flex flex-col items-center justify-center gap-4">
                        <div class="p-16 flex items-center justify-center">
                            <span class="text-5xl font-semibold">{{ $user->abbreviationUser }}</span>
                        </div>
                    </div>
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 content-end mb-3">
                            <div class="flex flex-col items-start gap-2">
                                <span class="text-xl font-semibold">Фамилия</span>
                                <input type="text" name="surname"
                                       class="w-full px-2 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md focus:border-[#8a70d6] focus:ring-[#8a70d6]"
                                       value="{{ $user->surname }}" placeholder="Фамилия" spellcheck="false">
                            </div>
                            <div class="flex flex-col items-start gap-2">
                                <span class="text-xl font-semibold">Имя</span>
                                <input type="text" name="name"
                                       class="w-full px-2 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md focus:border-[#8a70d6] focus:ring-[#8a70d6]"
                                       value="{{ $user->name }}" placeholder="Имя" spellcheck="false">
                            </div>
                            <div class="flex flex-col items-start justify-end gap-2">
                                <span class="text-xl font-semibold">Отчество</span>
                                <input type="text" name="middleName"
                                       class="w-full px-2 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md focus:border-[#8a70d6] focus:ring-[#8a70d6]"
                                       value="{{ $user->middleName }}" placeholder="Отчество" spellcheck="false">
                            </div>
                            <div class="flex flex-col items-start gap-2">
                                <span class="text-xl font-semibold">E-mail</span>
                                <input type="text" name="email"
                                       class="w-full px-2 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md focus:border-[#8a70d6] focus:ring-[#8a70d6]"
                                       value="{{ $user->email }}" placeholder="Почта" spellcheck="false">
                            </div>
                        </div>
                        @error('surname')
                        <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                            </svg>

                            <span class="text-black">{{ $message }}</span>
                        </div>
                        @enderror
                        @error('name')
                        <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                            </svg>

                            <span class="text-black">{{ $message }}</span>
                        </div>
                        @enderror
                        @error('middleName')
                        <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                            </svg>

                            <span class="text-black">{{ $message }}</span>
                        </div>
                        @enderror
                        @error('email')
                        <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z"/>
                            </svg>

                            <span class="text-black">{{ $message }}</span>
                        </div>
                        @enderror
                        <div class="flex items-end">
                            <button type="submit" class="border bg-[#6366f1] text-white w-full h-10 rounded-md">
                                Обновить
                            </button>
                        </div>
                    </form>
                </div>
            </x-tab.items>
        </x-tab>
    </section>
@endsection
