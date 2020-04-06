<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SystemInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:install {environment?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setups system environment. NOTE: Do not run this command in production';

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
        if (app()->environment() !== 'production') {

            $choices = ['local', 'production'];
            $environment = $this->argument('environment');

            if ($environment == null) {
                $environment = $this->choice('Specify Environment', $choices, 0);
            } else {
                $environment = $choices[(int)$environment];
            }

            $this->info('Running ' . $environment . ' environment setup');
            if ($environment !== 'production') {
                $this->info('checking system status');
                $this->warn('migration started...');
                $this->call('migrate:fresh');
                $this->info('migration done...');
                $this->warn('Seeding');
                $this->call('db:seed');
                $this->warn('Housekeeping');

                //Check if passport keys are installed
                //if ((!file_exists('storage/oauth-public.key')) || (!file_exists('storage/oauth-private.key'))) {
                //$this->info('No OAuth keys detected. Running passport install now.');
//                $this->call('passport:install', ['--force' => true]);
                //}
            }

            $this->alert('Done! Your ' . $environment . ' environment is completely setup');
        } else {
            $this->alert('Sorry! This command is disabled in production');
        }
    }
}
