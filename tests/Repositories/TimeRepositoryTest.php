<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 10:39
 */

namespace Tob;


class TimeRepositoryTest extends TestCase {

    public function setUp() {

        parent::setUp();
        Config::injectCurrentTime(new MockCurrentTime(1529611200 )); //2018-06-21 22:00:00
    }

    public function testInitialize() {

        TimeRepository::instance()->initializeDatabase(1527832800); //2018-06-01
        $actual   = Config::connection()->get('start');
        $expected = 1527832800;
        self::assertEquals($expected, $actual);
    }

    public function testInitAndGetAvailable() {

        $actual   = TimeRepository::instance()->initializeDatabase(1527832800)//2018-06-01
                                  ->getAvailable();
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

        TimeRepository::instance()->initializeDatabase(1527832800); //2018-06-01
        TimeFixture::fixture();

        $actual   = json_decode(json_encode(TimeRepository::instance()->get(1528063200)), true);
        $expected = TimeFixture::week1();
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws InvalidException
     */
    public function testGetAll() {

        TimeRepository::instance()->initializeDatabase(1527832800); //2018-06-01
        TimeFixture::fixture();
        $repo     = TimeRepository::instance();
        $actual   = json_decode(json_encode($repo->aggregateAll()), true);
        $expected = TimeFixture::allWeeks();
        self::assertEquals($expected, $actual);
    }
}