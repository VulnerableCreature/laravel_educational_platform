<?php

namespace App\Livewire\Courses\Popular;

use Livewire\Component;

class Course extends Component
{
    public function with(): array
    {
        return [
            'headers' => [
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Название курса'],
                ['index' => 'start', 'label' => 'Дата начала'],
                ['index' => 'rate', 'label' => 'Рейтинг'],
                ['index' => 'level', 'label' => 'Уровень'],
            ],
            'rows' => [],
        ];
    }
    public function render()
    {
        return view('livewire.courses.popular.course');
    }
}
