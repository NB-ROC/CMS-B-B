<?php

namespace App\Statics;

use App\Statics\Settings;
use DirectoryIterator;
use ValueError;

class Storage
{
    private ?string $storage_folder;
    private array $storage_register = [];

    public function __construct()
    {
        $this->storage_folder = Settings::$STORAGEDIR;
        $this->register_loop($this->storage_folder);
    }

    private function register_loop(string $dir)
    {
        foreach (new DirectoryIterator($dir) as $file) {
            if ($file->isDot()) {
                continue;
            }

            if ($file->isDir()) {
                $this->register_loop(Settings::$STORAGEDIR . '/' . $file);
                continue;
            }

            $this->register($file->getBasename("." . $file->getExtension()), str_replace(Settings::$BASEDIR . '/', "", $file->getPathname()));
        }
    }

    public function register(string $name, string $path)
    {
        if (array_key_exists($name, $this->storage_register)) {
            throw new ValueError("file already registerd");
        } else {
            $this->storage_register[$name] = $path;
        }
    }

    public function get(string $name)
    {
        if (array_key_exists($name, $this->storage_register)) {
            return $this->storage_register[$name];
        } else {
            throw new ValueError("no storage item not found");
        }
    }

    public function debug_register()
    {
        return var_dump($this->storage_register);
    }
}
