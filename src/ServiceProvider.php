<?php

namespace Ambersive\StatamicFields;

use Statamic\Providers\AddonServiceProvider;
use Statamic;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        \Ambersive\StatamicFields\FieldTypes\TemplateFiltered::class
    ];

    public function boot()
    {
        parent::boot();

        Statamic::script('app', 'cp.js');

        // Translations
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'ambersive-sf');
    }

    public function register()
    {
        parent::register();
    }
}
