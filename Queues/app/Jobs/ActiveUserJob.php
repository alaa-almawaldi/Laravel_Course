<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ActiveUserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $users_id;
    public function __construct($users_id)
    {
        $this->users_id = $users_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->users_id as $ids){
            User::where('id',$ids)->update([
                'status'=>1,
            ]);
        }
    }
}
