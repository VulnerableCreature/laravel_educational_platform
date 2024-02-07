<div>
    <x-loading loading="create" />
    <form wire:submit="create">
        <div class="flex flex-col items-start justify-center gap-5 w-full">
            <input type="text" name="title" wire:model.live="title"
                class="w-full px-10 border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                placeholder="Название курса" spellcheck="true" autofocus>
            @error('title')
                <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>

                    <span class="text-black">{{ $message }}</span>
                </div>
            @enderror

            <textarea wire:model.live="description"
                class="w-full border-gray-400 text-gray-700 placeholder:text-gray-500 rounded-md pl-10 focus:border-[#6366f1] focus:ring-[#6366f1]"
                placeholder="Добавьте описание курса" rows="7"></textarea>
            @error('description')
                <div class="flex items-center gap-2 w-full border p-2 bg-red-100 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>

                    <span class="text-black">{{ $message }}</span>
                </div>
            @enderror
            <div class="flex items-center justify-start gap-3">
                <button type="submit" class="p-2 bg-[#6366f1] text-white rounded-md">Сохранить</button>
                <a href="{{ route('course.index') }}" class="p-2 bg-[#efecff] text-black rounded-md">Назад</a>
            </div>
        </div>
    </form>
</div>
