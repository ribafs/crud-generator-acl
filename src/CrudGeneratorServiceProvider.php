<?php

namespace Ribafs\CrudGeneratorAcl;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);

        $this->publishes([
            __DIR__ . '/../publish/views/' => base_path('resources/views/'),
        ]);

        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/crud-generator-acl/'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Ribafs\CrudGeneratorAcl\Commands\CrudCommand',
            'Ribafs\CrudGeneratorAcl\Commands\CrudControllerCommand',
            'Ribafs\CrudGeneratorAcl\Commands\CrudModelCommand',
            'Ribafs\CrudGeneratorAcl\Commands\CrudMigrationCommand',
            'Ribafs\CrudGeneratorAcl\Commands\CrudViewCommand',
            'Ribafs\CrudGeneratorAcl\Commands\CrudLangCommand',
            'Ribafs\CrudGeneratorAcl\Commands\CrudApiCommand',
            'Ribafs\CrudGeneratorAcl\Commands\CrudApiControllerCommand'
        );
    }
}
