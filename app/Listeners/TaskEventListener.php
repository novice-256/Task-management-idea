<?php

namespace App\Listeners;

use App\Events\TaskEvents;
use App\Models\Notification;
use App\Models\Task;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use ReflectionClass;

class TaskEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {


    }

    /**
     * Handle the event.
     */
    public function handle(TaskEvents $taskEvents): void
    {
        $task =  $taskEvents->task;
        $userId = Auth::user()->id;
        $eventName = (new ReflectionClass($task))->getShortName();
        Notification::create([
            'user_id' => $userId,
            'name' => 'task.' . $eventName,
            'data' => json_encode(['task_id' => $task->id]),
        ]);

    }
}
