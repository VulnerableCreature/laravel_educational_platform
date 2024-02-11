<?php

namespace App\Service\Course;

use App\Contracts\Course\CourseContract;
use App\Models\Course;
use App\Models\Material;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class CourseService implements CourseContract
{
    public function allCourse(): Collection
    {
        return Course::all()->sortByDesc('created_at');
    }

    public function delete(Course $course): void
    {
        $course->delete();
    }

    public function update(Course $course, array $data): void
    {
        $course->update($data);
    }

    public function addMaterial(array $data): void
    {
        if (Arr::has($data, ['files'])) {
            $data['files'] = Storage::disk('public')->put('/files', $data['files']);
        }

        Material::query()->create([
            'title' => Arr::get($data, 'title'),
            'description' => Arr::get($data, 'description'),
            'isVisible' => Arr::get($data, 'isVisible'),
            'course_id' => Arr::get($data, 'course_id'),
            'file_path' => Arr::get($data, 'files')
        ]);
    }

    public function subscribe(Course $course, User $user): void
    {
        $user->courses()->attach($course->id);
    }

    public function unsubscribe(Course $course, User $user): void
    {
        $user->courses()->detach([$course->id]);
    }
}
