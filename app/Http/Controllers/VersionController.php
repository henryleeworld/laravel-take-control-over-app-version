<?php

namespace App\Http\Controllers;

use PragmaRX\Version\Package\Facade as Version;

class VersionController extends Controller
{
    public function show()
    {
        echo __('The version number is: ') . Version::version() . PHP_EOL;
        echo __('The commit ID is: ') . Version::commit() . PHP_EOL;
        echo __('The major version number is: ') . Version::major() . PHP_EOL;
        echo __('The minor version number is: ') . Version::minor() . PHP_EOL;
        echo __('The patch version number is: ') . Version::patch() . PHP_EOL;
    }
}
