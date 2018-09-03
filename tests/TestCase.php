<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 12.08.18
 * Time: 16:48
 */

namespace Tob;

class TestCase extends \PHPUnit\Framework\TestCase {

    public function setUp() {

        parent::setUp();
        date_default_timezone_set('Europe/Paris');
        Config::connection()->flushdb();
        for ($i = 0; $i < 5; $i++) {
            if (Config::connection()) {
                break;
            }
            sleep(5);
        }
    }

    public function testFlushProdDb() {


        TimeRepository::instance()->initializeDatabase(1531116000);
    }

   /* public function testRedis() {

        (new TimeRepository())->initializeDatabase(1527832800);
        TimeFixture::fixture();
    }*/
}