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

                <span class="text-lg font-regular">Вернуться к выбору курса</span>
            </a>
            <x-button icon="pencil" position="left">Записаться</x-button>
        </div>
        <x-tab selected="Информация">
            <x-tab.items tab="Информация">
                <div class="flex items-start gap-12">
                    <div class="flex flex-col items-start justify-center gap-4">
                        <div class="p-16"><span class="text-5xl font-semibold">{{ $course->firstLetter }}</span></div>
                    </div>
                    <div class="flex flex-col gap-3 py-6">
                        <div class="flex items-end justify-start gap-2">
                            <span class="text-xl font-semibold">Название курса:</span>
                            <span class="text-lg font-regular">{{ $course->title }}</span>
                        </div>
                        <div class="flex items-end gap-2">
                            <span class="text-xl font-semibold">Преподаватель:</span>
                            <span class="text-lg font-regular">Ким Виктор Валериянович</span>
                        </div>
                    </div>
                </div>
            </x-tab.items>
            <x-tab.items tab="Учебный материал">
                Invoices1
            </x-tab.items>
        </x-tab>
    </section>
@endsection
