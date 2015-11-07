<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class DBImportCommand extends Command
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
    protected $signature = 'db:import {host}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import current db to remote';

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

        $localUsername = config('database.connections.mysql.username');
        $localDatabase = config('database.connections.mysql.database');
        $localPassword = config('database.connections.mysql.password');

        $remoteUsername = config('app.remote.db.username');
        $remoteDatabase = config('app.remote.db.database');
        $remotePassword = config('app.remote.db.password');

        exec('mysqldump -u ' . $localUsername . ' -p'.$localPassword.' '.$localDatabase.' > dump.sql');
        exec('ssh ' . $host . ' mysql -u ' . $remoteUsername . ' -p'.$remotePassword.' '.$remoteDatabase.' < dump.sql');
        exec('rm dump.sql');
    }
}
