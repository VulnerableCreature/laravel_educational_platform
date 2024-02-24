<?php

namespace App\Service\Course\Material;

use App\Contracts\Course\Material\MaterialContract;
use App\Models\Material;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class MaterialService implements MaterialContract
{
    public function update(Material $material, array $data): void
    {
        if(Arr::has($data, ['files'])){
            $data['files'] = Storage::disk('public')->put('/files', $data['files']);
        }

        $material->update([
            'title' => Arr::get($data, 'title'),
            'description' => Arr::get($data, 'description'),
            'course_id' => Arr::get($data, 'course_id'),
            'file_path' => Arr::get($data, 'files') ?? $material->file_path
        ]);
    }

    public function delete(Material $material): void
    {
        $material->delete();
    }


}
