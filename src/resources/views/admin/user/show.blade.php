@extends('layout.user-layout')
@section('title', "Пользователь | $user->surnameMiddle")

@section('content')
    @include('includes.success-message')
    <section class="flex flex-col items-start justify-start gap-8 mt-3">
        <div class="w-full flex items-center justify-start gap-3">
            <a href="{{ route('admin.index') }}" class="flex items-center gap-3">
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
                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" class="w-full">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                    class="p-2 min-w-full rounded-lg flex items-center justify-start gap-2 hover:bg-red-400 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                </svg>

                                Удалить
                            </button>
                        </form>
                        <a href="{{ route('admin.user.edit', $user->id) }}"
                           class="p-2 rounded-lg w-full flex items-center justify-start gap-2 hover:bg-blue-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                            </svg>

                            Редактировать
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 content-end">
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Фамилия</span>
                            <span class="text-lg font-regular">{{ $user->surname }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Имя</span>
                            <span class="text-lg font-regular">{{ $user->name }}</span>
                        </div>
                        <div class="flex flex-col items-start justify-end gap-2">
                            <span class="text-xl font-semibold">Отчество</span>
                            <span class="text-lg font-regular">{{ $user->middleName }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">E-mail</span>
                            <span class="text-lg font-regular">{{ $user->email }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Логин</span>
                            <span class="text-lg font-regular">{{ $user->login }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Роль</span>
                            <span class="text-lg font-regular">{{ $user->role->title ?? 'Отсутствует' }}</span>
                        </div>
                    </div>
                </div>
            </x-tab.items>
        </x-tab>
    </section>
@endsection
