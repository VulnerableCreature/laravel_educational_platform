@extends('layout.user-layout')
@section('title', "Курс | $course->title")

@section('content')
    <section class="flex flex-col items-start justify-start gap-8">
        <div class="w-full flex items-center justify-between gap-3">
            <a href="{{ route('course.index') }}" class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>

                <span class="hidden md:block text-lg font-regular">Вернуться к выбору курса</span>
            </a>
            <x-button icon="pencil" position="left"><span class="hidden sm:block">Записаться</span></x-button>
        </div>
        <x-tab selected="Информация">
            <x-tab.items tab="Информация">
                <div class="flex items-start gap-12">
                    <div class="hidden lg:flex flex-col items-center justify-center gap-4">
                        <div class="p-16 flex items-center justify-center">
                            <span class="text-5xl font-semibold">{{ $course->firstLetter }}</span>
                        </div>
                        <button type="submit"
                            class="p-2 rounded-lg w-full flex items-center justify-start gap-2 hover:bg-red-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>

                            Удалить
                        </button>
                        <button type="submit"
                            class="p-2 rounded-lg w-full flex items-center justify-start gap-2 hover:bg-yellow-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                            </svg>

                            Добавить в избранное
                        </button>
                        <button type="submit"
                            class="p-2 rounded-lg w-full flex items-center justify-start gap-2 hover:bg-green-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                            </svg>

                            Понравилось
                        </button>
                    </div>
                    <div class="flex flex-col gap-8 py-6">
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Название курса</span>
                            <span class="text-lg font-regular">{{ $course->title }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Преподаватель</span>
                            <span class="text-lg font-regular">Ким Виктор Валериянович</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Количество уроков</span>
                            <span class="text-lg font-regular">213</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Количество участников</span>
                            <span class="text-lg font-regular">213</span>
                        </div>
                    </div>                 
                </div>
                <hr class="mb-3">
                <div class="flex flex-col items-start">
                    <span class="text-4xl font-semibold mb-3">Описание</span>
                    {{ $course->description }}
                </div>
            </x-tab.items>
            <x-tab.items tab="Учебный материал">
                Invoices1
            </x-tab.items>
        </x-tab>
    </section>
@endsection
