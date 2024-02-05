@extends('layout.user-layout')
@section('title', 'Курс | Веб-программирование')

@section('content')

    <section class="flex items-start justify-start gap-8">
        <x-tab selected="Информация">
            <x-tab.items tab="Информация">
                <div class="flex flex-col gap-3 py-6">
                    <div class="flex items-end gap-2">
                        <span class="text-xl font-semibold">Название курса:</span>
                        <span class="text-lg font-regular">Веб-программирование</span>
                    </div>
                    <div class="flex items-end gap-2">
                        <span class="text-xl font-semibold">Преподаватель:</span>
                        <span class="text-lg font-regular">Ким Виктор Валериянович</span>
                    </div>
                </div>
                <div class="flex items-center justify-end gap-3">
                    <x-link href="{{ route('course.index') }}" text="Закрыть" />
                    <x-button icon="pencil" position="left">Записаться</x-button>
                </div>
            </x-tab.items>
            <x-tab.items tab="Учебный материал">
                Invoices1
            </x-tab.items>
        </x-tab>
    </section>
@endsection
