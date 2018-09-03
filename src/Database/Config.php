<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 12.08.18
 * Time: 16:51
 */

namespace Tob;

class Config {

    private static $connection;
    private static $current_time;

    public static function connection() : \Predis\Client {

        if (is_null(self::$connection)) {
            try {
                $environment              = 'tcp://' . getenv('REDIS_HOST') . ':' . getenv('REDIS_PORT');
                self::$connection = new \Predis\Client($environment);
            } catch (\Exception $exception) {
                self::$connection = null;
                return null;
            }
        }
        return self::$connection;
    }

    public static function injectCurrentTime(CurrentTime $currentTime) {

        self::$current_time = $currentTime;
    }

    public static function currentTime() {

        if(is_null(self::$current_time)) {
            self::$current_time = new CurrentTime();
        }
        return self::$current_time->time();
    }
}