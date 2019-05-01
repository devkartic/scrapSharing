<?php

namespace App\Console\Commands;

use App\Post;
use Illuminate\Console\Command;
use App\Http\Controllers\ScrapController;

class Scraping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrap:scheduler';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scraping After Certain Period';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $obj = new ScrapController();
        $data = $obj->getContent();

        Post::insert($data);
    }
}
