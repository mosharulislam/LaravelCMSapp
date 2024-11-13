<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ListViews extends Command
{
    protected $signature = 'view:list';
    protected $description = 'List all Blade views in the resources/views directory';

    public function handle()
    {
        $viewsPath = resource_path('views');
        $views = File::allFiles($viewsPath);

        foreach ($views as $view) {
            $this->line($view->getRelativePathname());
        }

        return 0;
    }
}