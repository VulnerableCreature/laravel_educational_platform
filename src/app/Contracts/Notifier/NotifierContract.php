<?php

namespace App\Contracts\Notifier;

interface NotifierContract
{
    public function send(): void;
}
