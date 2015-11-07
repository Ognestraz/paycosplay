<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ImageImportCommand extends Command
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'image:import {host}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import image to remote';

    /**
     * Create a new command instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $host = $this->argument('host');
        $imageDir = storage_path().'/app/';
        $remoteImageDir = '/var/www/' . $host . '/storage';
        echo exec('scp -r ' . $imageDir . ' ' . $host . ':' . $remoteImageDir);
    }
}
