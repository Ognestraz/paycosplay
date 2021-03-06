<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\DBImportCommand;
use App\Console\Commands\ImageClearCommand;
use App\Console\Commands\ImageImportCommand;
use App\Console\Commands\VendorPublishCommand;

class ArtisanServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [
        'VendorPublish' => 'command.vendor.publish',
        'ImageClear' => 'command.image.clear',
        'ImageImport' => 'command.image.import',
        'DBImport' => 'command.db.import'
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        foreach (array_keys($this->commands) as $command) {
            $method = "register{$command}Command";

            call_user_func_array([$this, $method], []);
        }

        $this->commands(array_values($this->commands));
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerVendorPublishCommand()
    {
        $this->app->singleton('command.vendor.publish', function ($app) {
            return new VendorPublishCommand($app['files']);
        });
    }
    
    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerImageClearCommand()
    {
        $this->app->singleton('command.image.clear', function ($app) {
            return new ImageClearCommand($app['files']);
        });
    }
    
    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerImageImportCommand()
    {
        $this->app->singleton('command.image.import', function ($app) {
            return new ImageImportCommand($app['files']);
        });
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerDBImportCommand()
    {
        $this->app->singleton('command.db.import', function ($app) {
            return new DBImportCommand($app['files']);
        });
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_values($this->commands);
    }
}
