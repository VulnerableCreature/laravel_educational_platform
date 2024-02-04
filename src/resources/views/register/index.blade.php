@extends('layout.app')
@section('title', 'Регистрация')

@section('content')
    <section class="min-h-screen bg-[#fbfbfb] flex items-center justify-center">
        <div class="sm:w-3/4 lg:w-1/3 p-8 rounded-xl">
            <div class="flex flex-col items-center justify-center gap-2 mb-10">
                <img src="{{ asset('images/onlineEdu.png') }}" alt="Logo" class="object-contain h-48 w-56">
                <span class="font-bold text-2xl">Создайте аккаунт</span>
            </div>
            <div class="mx-auto max-w-md w-full">
                <form action="{{ route('register.store') }}" method="POST" class="space-y-3 px-12" autocomplete="off">
                    @csrf
                    <div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ $errors->has('surname') ? 'w-5 h-5 text-red-700' : 'w-5 h-5 text-gray-500' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                            </div>
                            <input type="text" name="surname"
                                class="w-full px-10 {{ $errors->has('surname') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700' : 'border-gray-400 text-gray-700 placeholder:text-gray-500  rounded-md pl-10 focus:border-[#8a70d6] focus:ring-[#8a70d6]' }}"
                                value="{{ old('surname') }}" placeholder="Фамилия" spellcheck="false" autofocus>
                            @error('surname')
                                <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5 text-red-700">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @error('surname')
                        <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                    @enderror
                    <div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ $errors->has('name') ? 'w-5 h-5 text-red-700' : 'w-5 h-5 text-gray-500' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                            </div>
                            <input type="text" name="name"
                                class="w-full px-10 {{ $errors->has('name') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700' : 'border-gray-400 text-gray-700 placeholder:text-gray-500  rounded-md pl-10 focus:border-[#8a70d6] focus:ring-[#8a70d6]' }}"
                                value="{{ old('name') }}" placeholder="Имя" spellcheck="false">
                            @error('name')
                                <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5 text-red-700">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @error('name')
                        <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                    @enderror
                    <div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ $errors->has('middleName') ? 'w-5 h-5 text-red-700' : 'w-5 h-5 text-gray-500' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                            </div>
                            <input type="text" name="middleName"
                                class="w-full px-10 {{ $errors->has('middleName') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700' : 'border-gray-400 text-gray-700 placeholder:text-gray-500  rounded-md pl-10 focus:border-[#8a70d6] focus:ring-[#8a70d6]' }}"
                                value="{{ old('middleName') }}" placeholder="Отчество" spellcheck="false">
                            @error('middleName')
                                <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5 text-red-700">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @error('middleName')
                        <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                    @enderror
                    <div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ $errors->has('email') ? 'w-5 h-5 text-red-700' : 'w-5 h-5 text-gray-500' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                                </svg>

                            </div>
                            <input type="text" name="email"
                                class="w-full px-10 {{ $errors->has('email') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700' : 'border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#8a70d6] focus:ring-[#8a70d6]' }}"
                                value="{{ old('email') }}" placeholder="Почта" spellcheck="false">
                            @error('middleName')
                                <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5 text-red-700">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @error('email')
                        <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                    @enderror
                    <div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ $errors->has('login') ? 'w-5 h-5 text-red-700' : 'w-5 h-5 text-gray-500' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </div>
                            <input type="text" name="login"
                                class="w-full px-10 {{ $errors->has('login') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700' : 'border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#8a70d6] focus:ring-[#8a70d6]' }}"
                                value="{{ old('login') }}" placeholder="Логин" spellcheck="false" />
                            @error('login')
                                <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5 text-red-700">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @error('login')
                        <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                    @enderror

                    <div>
                        <div class="relative rounded-md shadow-sm" x-data="{ visible: true }">
                            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="{{ $errors->has('password') ? 'w-5 h-5 text-red-700' : 'w-5 h-5 text-gray-500' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                                </svg>
                            </div>
                            <input x-bind:type="visible ? 'password' : 'text'" name="password" id="password"
                                class="w-full px-10 {{ $errors->has('password') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700' : 'border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#8a70d6] focus:ring-[#8a70d6]' }}"
                                placeholder="Пароль" spellcheck="false">
                            <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                                <button type="button" x-on:click="visible = !visible" x-tooltip="Показать пароль">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="{{ $errors->has('password') ? 'w-5 h-5 text-red-700' : 'w-5 h-5 text-gray-500 hover:stroke-[#8a70d6] active:text-[#8a70d6]' }}">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </button>

                            </div>
                        </div>
                    </div>
                    @error('password')
                        <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                    @enderror
                    <div class="flex items-center justify-end w-full">
                        <span>Есть аккаунт ? <a href="{{ route('auth.index') }}"
                                class="text-[#8a70d6]">Войдите!</a></span>
                    </div>
                    <button type="submit"
                        class="w-full p-2 bg-[#8a70d6] text-white rounded-lg border flex items-center justify-center hover:bg-[#7256c4]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>

                        Создать
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
