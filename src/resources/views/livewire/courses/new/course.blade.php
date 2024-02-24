<div>
    <span class="text-2xl font-semibold">Новые курсы</span>
    <section class="mt-4 {{ $courses->isEmpty() ? 'flex items-center justify-center' : 'grid grid-cols-2 gap-3 xl:grid-cols-4 md:grid-cols-4' }}">
        @forelse($courses as $course)
            <div class="w-full h-72 p-4 bg-[#fff0e1] rounded-xl flex flex-col gap-2">
                <div class="h-32 bg-[#fbab5d] rounded-xl flex items-center justify-center">
                    <img src="{{ asset('images/course-one.png') }}" alt="Image: photo course" class="w-28 h-28 ">
                </div>
                <div class="flex flex-col flex-shrink">
                    <span class="text-md font-semibold whitespace-nowrap truncate"
                          x-tooltip="{{ $course->title }}">{{ $course->title }}</span>
                    <span class="text-sm font-extra">{{ $course->materials()->count() }} {{ trans_choice('Урока|Уроков', $course->materials()->count()) }}</span>
                </div>
                <div class="flex items-center justify-end">
                    <a href="{{ route('course.show', $course->id) }}" class="bg-[#fbab5d] p-1 rounded-md"
                       x-tooltip="Перейти к курсу">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 stroke-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                        </svg>
                    </a>
                </div>
            </div>
        @empty
            @include('includes.no-data')
        @endforelse
    </section>
</div>
