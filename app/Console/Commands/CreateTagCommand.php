<?php

namespace App\Console\Commands;

use App\Models\Tag;
use Nette\Utils\Random;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class CreateTagCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:tag {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tag Create';

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
     * @return int
     */
    public function handle()
    {
        Tag::create([
            'name' => $this->argument('name'),
        ]);
        $this->info('Tag Created');
    }
}
