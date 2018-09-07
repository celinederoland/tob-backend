<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 09:55
 */

namespace Tob;


class WeekTest extends TestCase {

    /**
     * @throws InvalidException
     */
    public function testAddTime() {

        $time1 = (new Time())->init(1535267100); //2018-08-26 09:05
        $time2 = (new Time())->init(1535265900); //2018-08-26 08:45
        $time3 = (new Time())->init(1535180700); //2018-08-25 09:05
        $time4 = (new Time())->init(1535353500); //2018-08-27 09:05
        $week  = (new Week())->addTime($time1)->addTime($time2)->addTime($time3);

        $actual   = json_decode(json_encode($week), true);
        $expected =
            [
                'data'  => [
                    'd-1534716000' => ['data' => [], 'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400
                    ]],
                    'd-1534802400' => ['data' => [], 'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400
                    ]],
                    'd-1534888800' => ['data' => [], 'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400
                    ]],
                    'd-1534975200' => ['data' => [], 'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400
                    ]],
                    'd-1535061600' => ['data' => [], 'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400
                    ]],
                    'd-1535148000' => ['data' => [1535180700], 'stats' => [
                        'count'       => 1,
                        'duration'    => 57600,
                        'min_gap'     => 57600,
                        'max_gap'     => 57600,
                        'average_gap' => 57600,
                    ]],
                    'd-1535234400' => ['data' => [1535265900, 1535267100], 'stats' => [
                        'count'       => 2,
                        'duration'    => 1200,
                        'min_gap'     => 1200,
                        'max_gap'     => 1200,
                        'average_gap' => 1200
                    ]],
                ],
                'stats' => [
                    'count'       => 0,
                    'duration'    => 49542,
                    'min_gap'     => 70114,
                    'max_gap'     => 70114,
                    'average_gap' => 70114,
                ]
            ];
        self::assertEquals($expected, $actual);
        try {
            $week->addTime($time4);
            self::fail('Must throw `This time is not in the same week`');
        } catch (InvalidException $exception) {
            self::assertEquals('This time is not in the same week', $exception->getMessage());
        }
    }

    /**
     * @throws InvalidException
     */
    public function testWeek() {

        try {
            (new Week())->week();
            self::fail('Must throw `Try to get week on empty week`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get week on empty week', $exception->getMessage());
        }

        $time1 = (new Time())->init(1535267100); //2018-08-26 09:05
        $time2 = (new Time())->init(1535265900); //2018-08-26 08:45
        $time3 = (new Time())->init(1535180700); //2018-08-25 09:05
        $week  = (new Week())->addTime($time1)->addTime($time2)->addTime($time3);

        $actual   = $week->week();
        $expected = 34;
        self::assertEquals($expected, $actual);
    }

    /**
     * @throws InvalidException
     */
    public function testFullWeek() {

        try {
            (new Week())->fullWeek();
            self::fail('Must throw `Try to get fullWeek on empty week`');
        } catch (InvalidException $exception) {
            self::assertEquals('Try to get fullWeek on empty week', $exception->getMessage());
        }

        $time1 = (new Time())->init(1535267100); //2018-08-26 09:05
        $time2 = (new Time())->init(1535265900); //2018-08-26 08:45
        $time3 = (new Time())->init(1535180700); //2018-08-25 09:05
        $week  = (new Week())->addTime($time1)->addTime($time2)->addTime($time3);

        $actual   = $week->fullWeek();
        $expected = '2018:34';
        self::assertEquals($expected, $actual);
    }
}