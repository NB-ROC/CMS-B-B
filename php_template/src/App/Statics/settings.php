<?php 

namespace App\Statics;

class Settings{
    public static string $STATICSDIR = __DIR__;
    public static ?string $BASEDIR = null;
    public static ?string $STORAGEDIR = null;

    public static function init_settings(){
        Settings::$BASEDIR ? :  Settings::$BASEDIR = dirname(dirname(Settings::$STATICSDIR));
        Settings::$STORAGEDIR ? :  Settings::$STORAGEDIR = Settings::$BASEDIR . "/storage";
    }
}
?>