<?php

namespace App\Console\Commands\Notification;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Sender extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sender:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notification';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $users = User::all();
        $now = Carbon::now();

        foreach ($users as $user) {
            // Дата создания объекта
            $createdAt = Carbon::parse($user->created_at);

            // Проверка прошло ли более 20 минут
            if ($now->diffInMinutes($createdAt) >= 20) {
                // Отправлять соответствующий шаблон на почту
                echo 'Test';
            }
        }
    }
}
