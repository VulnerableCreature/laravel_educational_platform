<div>
    <section class="flex flex-col gap-4">
        <div class="w-full h-14 flex items-center justify-between">
            <span class="text-xl font-semibold">Профиль</span>
            <div class="flex items-center gap-2">
                <button x-on:click="$slideOpen('profile-slide')" class="p-2 rounded-md bg-white shadow-xl"
                        x-tooltip="Редактировать">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                    </svg>
                </button>
                <x-slide title="Профиль" id="profile-slide" blur></x-slide>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="p-2 rounded-md bg-white shadow-xl" x-tooltip="Выйти">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center gap-2">
            <img src="{{ asset('images/user-profile.png') }}" alt="Image: User profile"
                 class="w-48 h-48 object-contain">
            <span class="text-md font-medium">{{ $user->fullName }}</span>
            <span class="text-gray-500">Студент</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-2xl font-semibold">Мои курсы</span>
            <a href="#" class="text-[#8a70d6] underline underline-offset-1">Смотреть все</a>
        </div>
        <div class="flex flex-col gap-2">
            @for ($i = 0; $i < 3; $i++)
                <a href="" class="flex flex-col gap-1 px-2 py-3 rounded-xl hover:bg-[#efecff]">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <x-avatar text="TS" color="white"/>
                            <div class="flex flex-col">
                                <span class="text-md font-medium">Python</span>
                                <span class="text-sm font-regular">Ким Виктор Валериянович</span>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                        </svg>
                    </div>
                </a>
            @endfor
        </div>
{{--            <div class="flex items-center justify-center gap-2">--}}
{{--                <span class="font-regular text-lg">Вы пока не добавили не одно курса</span>--}}
{{--            </div>--}}
        </div>
    </section>
</div>
