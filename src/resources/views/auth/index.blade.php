@extends('layout.app')
@section('title', 'Авторизация')

@section('content')
<section class="min-h-screen flex items-center justify-center">
    <div class="sm:w-3/4 lg:w-1/3 pt-8 pb-24 bg-white border border-gray-300 rounded-xl drop-shadow-2xl">
        <div class="flex flex-col items-center justify-center gap-2 mb-10">
            <span class="font-bold text-2xl">Здравствуйте ещё раз</span>
            <span class="font-extra text-md">Введите свои учетные данные и вперед!</span>
        </div>
        <div class="mx-auto max-w-md w-full">
            <form action="{{ route('auth.store') }}" method="POST" class="space-y-3 px-12" autocomplete="off">
                @csrf
                <div>
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor"
                                 class="{{ $errors->has('login') ? 'w-5 h-5 text-red-700': 'w-5 h-5 text-gray-500' }}">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                            </svg>

                        </div>
                        <input type="text" name="login"
                               class="w-full px-10 {{ $errors->has('login') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700': 'border-gray-400 text-gray-700 placeholder:text-gray-500 text-gray-500 rounded-md pl-10 focus:border-[#0056a4] focus:ring-[#0056a4]' }}"
                               value="{{ old('login') }}" placeholder="Логин" spellcheck="false" autofocus>
                        @error('login')
                        <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-5 h-5 text-red-700">
                                <path fill-rule="evenodd"
                                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                        @enderror
                    </div>
                </div>
                @error('login')
                <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                @enderror

                <div>
                    <div class="relative rounded-md shadow-sm"
                         x-data="{ visible: true, showPassword: 'Показать или скрыть пароль' }">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor"
                                 class="{{ $errors->has('password') ? 'w-5 h-5 text-red-700': 'w-5 h-5 text-gray-500' }}">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33"/>
                            </svg>
                        </div>
                        <input x-bind:type="visible ? 'password' : 'text'" name="password" id="password"
                               class="w-full px-10 {{ $errors->has('password') ? 'border-red-700 text-red-800 placeholder:text-red-800 rounded-md pl-10 focus:border-red-700 focus:ring-red-700': 'border-gray-400 text-gray-700 placeholder:text-gray-500 text-gray-500 rounded-md pl-10 focus:border-[#0056a4] focus:ring-[#0056a4]' }}"
                               placeholder="Пароль" spellcheck="false">
                        <div class="absolute right-0 inset-y-0 flex items-center pl-3 pr-3">
                            <button type="button" x-on:click="visible = !visible" x-tooltip="showPassword">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor"
                                     class="{{ $errors->has('password') ? 'w-5 h-5 text-red-700': 'w-5 h-5 text-gray-500 hover:stroke-[#0056a4] active:text-[#0056a4]' }}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>
                            </button>

                        </div>
                    </div>
                </div>
                @error('password')
                <p class="mt-1 text-md text-red-600 font-semibold">{{ $message }}</p>
                @enderror
                <button type="submit"
                        class="w-full p-2 bg-[#004088] text-white rounded-lg border flex items-center justify-center hover:bg-[#004099]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"/>
                    </svg>
                    Войти
                </button>
            </form>
        </div>
    </div>
</section>
@endsection