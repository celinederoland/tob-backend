<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 08:43
 */

namespace Tob;


class TimeTest extends TestCase {

    public function testTime() {

        $actual   = (new Time())->init(1535265900)->time();
        $expected = 1535265900;
        self::assertEquals($expected, $actual);
    }

    public function testYear() {

        $actual   = (new Time())->init(1535265900)->year();
        $expected = 2018;
        self::assertEquals($expected, $actual);
    }

    public function testWeek() {

        $actual   = (new Time())->init(1535265900)->week();
        $expected = 34;
        self::assertEquals($expected, $actual);
    }

    public function testDay() {

        $actual   = (new Time())->init(1535265900)->day();
        $expected = 7;
        self::assertEquals($expected, $actual);
    }

    public function testHour() {

        $actual   = (new Time())->init(1535265900)->hour();
        $expected = 8;
        self::assertEquals($expected, $actual);
    }

    public function testMinute() {

        $actual   = (new Time())->init(1535265900)->minute();
        $expected = 45;
        self::assertEquals($expected, $actual);
    }

    public function testFullDay() {

        $actual   = (new Time())->init(1535265900)->fullDay();
        $expected = '2018:34:7';
        self::assertEquals($expected, $actual);
    }

    public function testFullWeek() {

        $actual   = (new Time())->init(1535265900)->fullWeek();
        $expected = '2018:34';
        self::assertEquals($expected, $actual);
    }

    public function testKey() {

        $actual   = (new Time())->init(1535265900)->key();
        $expected = '2018:34';
        self::assertEquals($expected, $actual);
    }

    public function testField() {

        $actual   = (new Time())->init(1535265900)->field();
        $expected = '7:8:45';
        self::assertEquals($expected, $actual);
    }

    public function testSave() {

        (new Time())->init(1535265900)->save();
        $actual   = Config::connection()->hget('2018:34', '7:8:45');
        $expected = 1535265900;
        self::assertEquals($expected, $actual);
    }

    public function testSerialize() {

        $actual   = (new Time())->init(1535265900)->jsonSerialize();
        $expected = 1535265900;
        self::assertEquals($expected, $actual);
    }

    public function testWeekStartTime() {

        $actual   = (new Time())->init(1535267100)->weekStartTime(); //2018-08-26 09:05
        $expected = 1534716000; //2018-08-20 00:00
        self::assertEquals($expected, $actual);
    }

    public function testWeekEndTime() {

        $actual   = (new Time())->init(1535267100)->weekEndTime(); //2018-08-26 09:05
        $expected = 1535320800; //2018-08-27 00:00
        self::assertEquals($expected, $actual);
    }

    public function testDayStartTime() {

        $actual   = (new Time())->init(1535267100)->dayStartTime(); //2018-08-26 09:05
        $expected = 1535234400; //2018-08-26 00:00
        self::assertEquals($expected, $actual);
    }

    public function testDayEndTime() {

        $actual   = (new Time())->init(1535267100)->dayEndTime(); //2018-08-26 09:05
        $expected = 1535320800; //2018-08-27 00:00
        self::assertEquals($expected, $actual);
    }
}