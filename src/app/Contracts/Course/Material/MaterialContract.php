<?php

namespace App\Contracts\Course\Material;

use App\Models\Material;

interface MaterialContract
{
    public function update(Material $material, array $data): void;
    public function delete(Material $material): void;
}
