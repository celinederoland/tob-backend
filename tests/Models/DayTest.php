<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 09:24
 */

namespace Tob;


class DayTest extends TestCase {

    /**
     * @throws \Exception
     */
    public function testAddTime() {

        $time1    = (new Time())->init(1535267100); //2018-08-26 09:05
        $time2    = (new Time())->init(1535265900); //2018-08-26 08:45
        $time3    = (new Time())->init(1535353500); //2018-08-27 00:10
        $day      = (new Day())->addTime($time1)->addTime($time2);
        $actual   = json_decode(json_encode($day), true);
        $expected = [
            'data'  => [1535265900, 1535267100],
            'stats' => [
                'count'       => 2,
                'duration'    => 1200,
                'min_gap'     => 1200,
                'max_gap'     => 1200,
                'average_gap' => 1200,
            ]
        ];
        self::assertEquals($expected, $actual);
        try {
            $day->addTime($time3);
            self::fail('Must throw `This time is not in the same day`');
        } catch (InvalidException $exception) {
            self::assertEquals('This time is not in the same day', $exception->getMessage());
        }
    }


    /**
     * @throws \Exception
     */
    public function testDay() {

        try {
            (new Day())->day();
            self::fail('Must throw `Try to get day on empty day`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get day on empty day', $exception->getMessage());
        }

        $time1    = (new Time())->init(1535267100); //2018-08-26 09:05
        $expected = 7;
        $actual   = (new Day())->addTime($time1)->day();
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws \Exception
     */
    public function testFullDay() {

        try {
            (new Day())->fullDay();
            self::fail('Must throw `Try to get fullDay on empty day`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get fullDay on empty day', $exception->getMessage());
        }

        $time1    = (new Time())->init(1535267100); //2018-08-26 09:05
        $expected = '2018:34:7';
        $actual   = (new Day())->addTime($time1)->fullDay();
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws \Exception
     */
    public function testWeek() {

        try {
            (new Day())->week();
            self::fail('Must throw `Try to get week on empty day`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get week on empty day', $exception->getMessage());
        }

        $time1    = (new Time())->init(1535267100); //2018-08-26 09:05
        $expected = '34';
        $actual   = (new Day())->addTime($time1)->week();
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws \Exception
     */
    public function testFullWeek() {

        try {
            (new Day())->fullWeek();
            self::fail('Must throw `Try to get fullWeek on empty day`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get fullWeek on empty day', $exception->getMessage());
        }

        $time1    = (new Time())->init(1535267100); //2018-08-26 09:05
        $expected = '2018:34';
        $actual   = (new Day())->addTime($time1)->fullWeek();
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws \Exception
     */
    public function testDayStartTime() {

        try {
            (new Day())->dayStartTime();
            self::fail('Must throw `Try to get day start time on empty day`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get day start time on empty day', $exception->getMessage());
        }

        $time1    = (new Time())->init(1535267100); //2018-08-26 09:05
        $expected = 1535234400;
        $actual   = (new Day())->addTime($time1)->dayStartTime();
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws \Exception
     */
    public function testDayEndTime() {

        try {
            (new Day())->dayEndTime();
            self::fail('Must throw `Try to get day end time on empty day`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get day end time on empty day', $exception->getMessage());
        }

        $time1    = (new Time())->init(1535267100); //2018-08-26 09:05
        $expected = 1535320800;
        $actual   = (new Day())->addTime($time1)->dayEndTime();
        self::assertEquals($expected, $actual);
    }
}