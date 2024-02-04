<aside class="fixed t-0 w-72 min-h-full hidden lg:block">
    <header class="w-full h-16 px-6 flex items-center justify-start">
        <a href="{{ route('main.index') }}" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-7 h-7 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>

            <span class="uppercase font-semibold text-lg">Академия</span>
        </a>
    </header>
    <section class="py-4 px-3">
        <section class="py-2">
            <ul role="list" class="flex flex-col gap-1">
                <li>
                    <a href="{{ route('main.index') }}"
                        class="flex items-center px-2 py-2 group hover:bg-[#e9e3ff] transition rounded-md {{ Route::is('main.index') ? 'bg-[#e9e3ff]' : 'bg-white' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 mr-2 group-hover:stroke-violet-icon group-hover:stroke-[2px] transition {{ Route::is('main.index') ? 'stroke-[2px]' : '' }}">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>

                        <span
                            class="mr-auto group-hover:font-bold text-sm {{ Route::is('main.index') ? 'font-bold text-sm' : '' }}">Главная</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon"
                            class="w-6 h-6 group-hover:stroke-[2px] transition {{ Route::is('main.index') ? 'stroke-[2px]' : '' }} }}">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-2 group hover:bg-[#e9e3ff] transition rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 mr-2 group-hover:stroke-violet-icon group-hover:stroke-[2px] transition">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                        </svg>


                        <span class="mr-auto group-hover:font-bold text-sm">Курсы</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon"
                            class="w-6 h-6 group-hover:stroke-violet-icon group-hover:stroke-[2px] transition">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center px-2 py-2 group hover:bg-[#e9e3ff] transition rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 mr-2 group-hover:stroke-violet-icon group-hover:stroke-[2px] transition">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>


                        <span class="mr-auto group-hover:font-bold text-sm">Мои курсы</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" data-slot="icon"
                            class="w-6 h-6 group-hover:stroke-violet-icon group-hover:stroke-[2px] transition">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </section>
    </section>
</aside>
