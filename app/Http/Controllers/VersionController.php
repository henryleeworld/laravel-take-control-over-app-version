<?php

namespace App\Http\Controllers;

use PragmaRX\Version\Package\Facade as Version;

class VersionController extends Controller
{
    private $version;

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct(Version $version)
    {
        $this->version = $version;
    }

    public function show()
    {
        echo '版本：' . $this->version::version() . PHP_EOL;
        echo '提交版本：' . $this->version::commit() . PHP_EOL;
        echo '主版本號：' . $this->version::major() . PHP_EOL;
        echo '次版本號：' . $this->version::minor() . PHP_EOL;
        echo '修訂號：' . $this->version::patch() . PHP_EOL;
    }
}
