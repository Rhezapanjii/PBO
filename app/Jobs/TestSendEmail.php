<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestHelloEmail;
// use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
class TestSendEmail implements ShouldQueue
{
    

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new TestHelloEmail();
        Mail::to('rheza.panji.tif21@polban.ac.id')->send(new TestHelloEmail());
    }
}
