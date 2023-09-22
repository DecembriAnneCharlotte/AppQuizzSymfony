<?php

namespace App\Twig\Runtime\Todo;

use Twig\Extension\RuntimeExtensionInterface;

class TodoListRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function doSomething($value)
    {
        // ...
    }
}
