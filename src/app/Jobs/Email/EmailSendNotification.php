<?php

namespace App\Jobs\Email;

use App\Mail\EmailSender;
use App\Models\Course;
use App\Models\Material;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailSendNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected User $user;
    protected Course $course;
    protected Material $material;

    /**
     * Create a new job instance.
     */
    public function __construct(User $user, Course $course, Material $material)
    {
        $this->user = $user;
        $this->course = $course;
        $this->material = $material;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->user->email)
            ->send(new EmailSender($this->user, $this->course, $this->material));
    }
}
