@extends('layout.user-layout')
@section('title', "Курс | $course->title")
<?php
$isLike = $course->likes->contains(auth()->user()->id)
?>
@section('content')
    @include('includes.success-message')
    <section class="flex flex-col items-start justify-start gap-8 mt-3">
        <div class="w-full flex items-center justify-between gap-3">
            <a href="{{ route('course.index') }}" class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
                </svg>

                <span class="hidden md:block text-lg font-regular">Вернуться к выбору курса</span>
            </a>
            @can('view-student', auth()->user())
                @if($course->users->contains(auth()->user()->id))
                    <form action="{{ route('course.student.unsubscribe', $course->id) }}" method="post">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 bg-[#6366f1] text-white rounded-md p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"/>
                            </svg>
                            <span class="hidden sm:block">Отписаться</span>
                        </button>
                    </form>
                @else
                    <form action="{{ route('course.student.subscribe', $course->id) }}" method="post">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 bg-[#6366f1] text-white rounded-md p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"/>
                            </svg>
                            <span class="hidden sm:block">Записаться</span>
                        </button>
                    </form>
                @endif
            @endcan
        </div>
        <x-tab selected="Информация">
            <x-tab.items tab="Информация">
                <div class="flex items-start gap-12 mb-3">
                    <div class="hidden lg:flex flex-col items-center justify-center gap-4">
                        <div class="p-16 flex items-center justify-center">
                            <span class="text-5xl font-semibold">{{ $course->firstLetter }}</span>
                        </div>
                        @can('view-teacher', auth()->user())
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="w-full">
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
                            <a href="{{ route('course.edit', $course->id) }}"
                               class="p-2 rounded-lg w-full flex items-center justify-start gap-2 hover:bg-blue-400 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                                </svg>

                                Редактировать
                            </a>
                        @endcan
                        @if($course->users->contains(auth()->user()->id))
                            @can('view-student', auth()->user())
                                <form action="{{ route('student.like.store', $course->id) }}" method="POST"
                                      class="w-full">
                                    @csrf
                                    <button type="submit"
                                            class="p-2 rounded-lg w-full flex items-center justify-start gap-2 {{ $isLike ? 'bg-green-400 text-white': 'hover:bg-green-400 hover:text-white' }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5"
                                             stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z"/>
                                        </svg>
                                        {{ $isLike ? 'Нравится' : 'Понравилось' }}
                                    </button>
                                </form>
                            @endcan
                        @endif
                    </div>
                    <div class="flex flex-col gap-8 py-6">
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Название курса</span>
                            <span class="text-lg font-regular">{{ $course->title }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Преподаватель</span>
                            <span class="text-lg font-regular">{{ $teacher ?? 'Отсутствует' }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Количество уроков</span>
                            <span class="text-lg font-regular">{{ $course->materials()->count() }}</span>
                        </div>
                        <div class="flex flex-col items-start gap-2">
                            <span class="text-xl font-semibold">Количество участников</span>
                            <span class="text-lg font-regular">{{ $course->users()->count() }}</span>
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
                @can('view-teacher', auth()->user())
                    <div class="flex items-center justify-end mb-2">
                        <a href="{{ route('course.lesson.create', $course->id) }}"
                           class="border px-3 py-2 rounded-md flex items-center gap-2 bg-[#6366f1] text-white"
                           x-tooltip="Добавить новый материл">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                            </svg>

                            <span class="font-regular text-sm">Создать</span>
                        </a>
                    </div>
                @endcan
                @can('view-student', auth()->user())
                    @if(!$course->users->contains(auth()->user()->id) && $materials->isNotEmpty())
                        <div class="w-full h-12 bg-red-100 flex items-center p-2 rounded-lg mb-3">
                            <span
                                class="font-medium text-sm md:text-lg">Чтобы получить больше информации. Запишитесь на курс!</span>
                        </div>
                    @endif
                @endcan
                @forelse($materials as $material)
                    <div
                        class="w-full h-full border-b border-gray-300 last:border-b-0 py-4 px-2 flex flex-col gap-10">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-xl truncate">{{ $material->title }}</span>
                            @can('view-teacher', auth()->user())
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('course.lesson.edit', [$course->id, $material->id]) }}"
                                       class="p-1 rounded-md hover:bg-blue-400 group"
                                       x-tooltip="Редактировать урок">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor"
                                             class="w-6 h-6 group-hover:stroke-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('course.lesson.delete', [$course->id, $material->id]) }}"
                                          method="post" class="flex items-center">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="p-1 rounded-md hover:bg-red-500 group"
                                                x-tooltip="Удалить урок">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor"
                                                 class="w-6 h-6 group-hover:stroke-white">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                            </svg>

                                        </button>
                                    </form>
                                </div>
                            @endcan
                        </div>
                        <span class="font-medium text-md leading-7 whitespace-normal truncate">
                                {{ $material->description }}
                            </span>
                        @if($course->users->contains(auth()->user()->id))
                            <div class="flex flex-col items-start justify-center gap-2 w-full">
                                <span class="font-semibold text-md truncate">Дополнительный материал</span>
                                <div class="flex items-center gap-2">
                                    @if(is_null($material->file_path))
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                            </div>
                            <form
                                action="{{ route('student.notification.store', [$course->id, $material->id]) }}"
                                class="flex items-center justify-end" method="POST">
                                @csrf
                                <button
                                    class="p-2 flex items-center gap-2 rounded-md bg-[#ebe9fb] hover:bg-[#6366f1] group">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="currentColor" class="w-6 h-6 group-hover:stroke-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5"/>
                                    </svg>

                                    <span
                                        class="text-md font-regular group-hover:text-white">Включить напоминание</span>
                                </button>
                            </form>
                        @endif
                    </div>
                @empty
                    @include('includes.no-data')
                @endforelse
            </x-tab.items>
        </x-tab>
    </section>
@endsection
