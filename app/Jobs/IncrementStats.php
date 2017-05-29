<?php

namespace App\Jobs;

use App\Stat;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class IncrementStats implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $endpoint;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $endpointStat = Stat::firstOrCreate(['endpoint' => $this->endpoint]);
        $endpointStat->increment('hits');
    }

     /**
     * The job failed to process.
     *
     * @param  Exception  $exception
     * @return void
     */
    public function failed(\Exception $exception)
    {
        Log::info($exception->getMessage());
    }
}
