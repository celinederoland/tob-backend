<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 13:23
 */

namespace Tob;


class TimeControllerTest extends TestCase {

    use TimeController;

    public function testAvailable() {

        Config::injectCurrentTime(new MockCurrentTime(1529611200)); //2018-06-21 22:00:00
        TimeRepository::instance()->initializeDatabase(1527832800);
        $actual   = $this->available();
        $expected = [
            1527458400,
            1528063200,
            1528668000,
            1529272800,
        ];
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws InvalidException
     */
    public function testGet() {

        TimeRepository::instance()->initializeDatabase(1527832800);

        TimeFixture::fixtureWeek2();
        $actual   = json_decode(json_encode($this->get(1528668000)), true);
        $expected = TimeFixture::week2();
        self::assertEquals($expected, $actual);
    }

    public function testAdd() {

        $this->add(1535265900);
        $actual   = Config::connection()->hget('2018:34', '7:8:45');
        $expected = 1535265900;
        self::assertEquals($expected, $actual);
    }


}