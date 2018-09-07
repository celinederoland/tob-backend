<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 13:09
 */

namespace Tob;


class TimeFixture {

    public static function allWeeks() {

        return [
            'w-1527458400' => self::week0(),
            'w-1528063200' => self::week1(),
            'w-1528668000' => self::week2(),
            'w-1529272800' => self::week3(),
        ];
    }

    public static function fixture() {

        self::fixtureWeek0();
        self::fixtureWeek1();
        self::fixtureWeek2();
        self::fixtureWeek3();

    }

    /**
     * @return array
     */
    public static function week0(): array {
        return [
            'data'  => [
                'd-1527458400' => ['data' => [], 'stats' => [
                    'count'       => 0,
                    'duration'    => 57600,
                    'min_gap'     => 86400,
                    'max_gap'     => 86400,
                    'average_gap' => 86400
                ]],
                'd-1527544800' => ['data' => [], 'stats' => [
                    'count'       => 0,
                    'duration'    => 57600,
                    'min_gap'     => 86400,
                    'max_gap'     => 86400,
                    'average_gap' => 86400
                ]],
                'd-1527631200' => ['data' => [], 'stats' => [
                    'count'       => 0,
                    'duration'    => 57600,
                    'min_gap'     => 86400,
                    'max_gap'     => 86400,
                    'average_gap' => 86400
                ]],
                'd-1527717600' => ['data' => [], 'stats' => [
                    'count'       => 0,
                    'duration'    => 57600,
                    'min_gap'     => 86400,
                    'max_gap'     => 86400,
                    'average_gap' => 86400
                ]],
                'd-1527804000' => [
                    'data'  => self::week0day5(),
                    'stats' => [
                        'count'       => 15,
                        'duration'    => 66000,
                        'min_gap'     => 1200,
                        'max_gap'     => 9300,
                        'average_gap' => 4714,
                    ]
                ],
                'd-1527890400' => [
                    'data'  => self::week0day6(),
                    'stats' => [
                        'count'       => 10,
                        'duration'    => 55800,
                        'min_gap'     => 1200,
                        'max_gap'     => 10500,
                        'average_gap' => 6200,
                    ]
                ],
                'd-1527976800' => [
                    'data'  => self::week0day7(),
                    'stats' => [
                        'count'       => 10,
                        'duration'    => 59700,
                        'min_gap'     => 2700,
                        'max_gap'     => 10800,
                        'average_gap' => 6633,
                    ]
                ],
            ],
            'stats' => [
                'count'       => 5,
                'duration'    => 58842,
                'min_gap'     => 50100,
                'max_gap'     => 53742,
                'average_gap' => 51878,
            ]
        ];
    }

    /**
     * @return array
     */
    public static function week1(): array {
        return [
            'data'  => [
                'd-1528063200' => [
                    'data'  => self::week1day1(),
                    'stats' => [
                        'count'       => 9,
                        'duration'    => 61800,
                        'min_gap'     => 3600,
                        'max_gap'     => 10800,
                        'average_gap' => 7725,
                    ]
                ],
                'd-1528149600' => [
                    'data'  => self::week1day2(),
                    'stats' => [
                        'count'       => 12,
                        'duration'    => 64200,
                        'min_gap'     => 1200,
                        'max_gap'     => 10800,
                        'average_gap' => 5836,
                    ]
                ],
                'd-1528236000' => [
                    'data'  => self::week1day3(),
                    'stats' => [
                        'count'       => 13,
                        'duration'    => 60900,
                        'min_gap'     => 1500,
                        'max_gap'     => 10200,
                        'average_gap' => 5075,
                    ]
                ],
                'd-1528322400' => [
                    'data'  => self::week1day4(),
                    'stats' => [
                        'count'       => 14,
                        'duration'    => 52200,
                        'min_gap'     => 1200,
                        'max_gap'     => 10500,
                        'average_gap' => 4015,
                    ]
                ],
                'd-1528408800' => [
                    'data'  => self::week1day5(),
                    'stats' => [
                        'count'       => 11,
                        'duration'    => 61500,
                        'min_gap'     => 1200,
                        'max_gap'     => 10500,
                        'average_gap' => 6150,
                    ]
                ],
                'd-1528495200' => [
                    'data'  => self::week1day6(),
                    'stats' => [
                        'count'       => 11,
                        'duration'    => 63300,
                        'min_gap'     => 2100,
                        'max_gap'     => 10200,
                        'average_gap' => 6330,
                    ]
                ],
                'd-1528581600' => [
                    'data'  => self::week1day7(),
                    'stats' => [
                        'count'       => 12,
                        'duration'    => 60900,
                        'min_gap'     => 1200,
                        'max_gap'     => 10800,
                        'average_gap' => 5536,
                    ]
                ],
            ],
            'stats' => [
                'count'       => 11,
                'duration'    => 60685,
                'min_gap'     => 1714,
                'max_gap'     => 10542,
                'average_gap' => 5809,
            ]
        ];
    }

    /**
     * @return array
     */
    public static function week2(): array {
        return [
            'data'  => [
                'd-1528668000' => [
                    'data'  => self::week2day1(),
                    'stats' => [
                        'count'       => 12,
                        'duration'    => 69900,
                        'min_gap'     => 1200,
                        'max_gap'     => 10200,
                        'average_gap' => 6354]
                ],
                'd-1528754400' => [
                    'data'  => self::week2day2(),
                    'stats' => [
                        'count'       => 11,
                        'duration'    => 58800,
                        'min_gap'     => 3000,
                        'max_gap'     => 10500,
                        'average_gap' => 5880
                    ]
                ],
                'd-1528840800' => [
                    'data'  => self::week2day3(),
                    'stats' => [
                        'count'       => 13,
                        'duration'    => 63900,
                        'min_gap'     => 1200,
                        'max_gap'     => 10800,
                        'average_gap' => 5325,
                    ]
                ],
                'd-1528927200' => [
                    'data'  => self::week2day4(),
                    'stats' => [
                        'count'       => 12,
                        'duration'    => 58500,
                        'min_gap'     => 2100,
                        'max_gap'     => 10200,
                        'average_gap' => 5318,
                    ]
                ],
                'd-1529013600' => [
                    'data'  => self::week2day5(),
                    'stats' => [
                        'count'       => 10,
                        'duration'    => 60000,
                        'min_gap'     => 2400,
                        'max_gap'     => 9900,
                        'average_gap' => 6666,
                    ]
                ],
                'd-1529100000' => [
                    'data'  => self::week2day6(),
                    'stats' => [
                        'count'       => 16,
                        'duration'    => 64800,
                        'min_gap'     => 1200,
                        'max_gap'     => 10200,
                        'average_gap' => 4320,
                    ]],
                'd-1529186400' => [
                    'data'  => self::week2day7(),
                    'stats' => [
                        'count'       => 10,
                        'duration'    => 69300,
                        'min_gap'     => 3000,
                        'max_gap'     => 10200,
                        'average_gap' => 7700,
                    ]
                ],
            ],
            'stats' => [
                'count'       => 12,
                'duration'    => 63600,
                'min_gap'     => 2014,
                'max_gap'     => 10285,
                'average_gap' => 5937,
            ]
        ];
    }

    /**
     * @return array
     */
    public static function week3(): array {
        return [
            'data'  => [
                'd-1529272800' => [
                    'data'  => self::week3day1(),
                    'stats' => [
                        'count'       => 11,
                        'duration'    => 63300,
                        'min_gap'     => 1800,
                        'max_gap'     => 10800,
                        'average_gap' => 6330,
                    ]
                ],
                'd-1529359200' => [
                    'data'  => self::week3day2(),
                    'stats' => [
                        'count'       => 11,
                        'duration'    => 60000,
                        'min_gap'     => 1200,
                        'max_gap'     => 10500,
                        'average_gap' => 6000,
                    ]
                ],
                'd-1529445600' => [
                    'data'  => self::week3day3(),
                    'stats' => [
                        'count'       => 10,
                        'duration'    => 53400,
                        'min_gap'     => 1800,
                        'max_gap'     => 10200,
                        'average_gap' => 5933,
                    ]
                ],
                'd-1529532000' => [
                    'data'  => [],
                    'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400,
                    ]
                ],
                'd-1529618400' => [
                    'data'  => [],
                    'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400,
                    ]
                ],
                'd-1529704800' => [
                    'data'  => [],
                    'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400,
                    ]
                ],
                'd-1529791200' => [
                    'data'  => [],
                    'stats' => [
                        'count'       => 0,
                        'duration'    => 57600,
                        'min_gap'     => 86400,
                        'max_gap'     => 86400,
                        'average_gap' => 86400,
                    ]
                ],
            ],
            'stats' => [
                'count'       => 10,
                'duration'    => 58900,
                'min_gap'     => 1600,
                'max_gap'     => 10500,
                'average_gap' => 6087,
            ]
        ];
    }

    public static function fixtureWeek0(): void {
        (new Time())->init(1527821400)->save(); // 2018-06-01 04:50 -- 2018:22:5:4:50
        (new Time())->init(1527825600)->save(); // 2018-06-01 06:00 -- 2018:22:5:6:00
        (new Time())->init(1527830700)->save(); // 2018-06-01 07:25 -- 2018:22:5:7:25
        (new Time())->init(1527837600)->save(); // 2018-06-01 09:20 -- 2018:22:5:9:20
        (new Time())->init(1527839400)->save(); // 2018-06-01 09:50 -- 2018:22:5:9:50
        (new Time())->init(1527848700)->save(); // 2018-06-01 12:25 -- 2018:22:5:12:25
        (new Time())->init(1527849900)->save(); // 2018-06-01 12:45 -- 2018:22:5:12:45
        (new Time())->init(1527853800)->save(); // 2018-06-01 13:50 -- 2018:22:5:13:50
        (new Time())->init(1527857100)->save(); // 2018-06-01 14:45 -- 2018:22:5:14:45
        (new Time())->init(1527859800)->save(); // 2018-06-01 15:30 -- 2018:22:5:15:30
        (new Time())->init(1527865200)->save(); // 2018-06-01 17:00 -- 2018:22:5:17:00
        (new Time())->init(1527874500)->save(); // 2018-06-01 19:35 -- 2018:22:5:19:35
        (new Time())->init(1527879600)->save(); // 2018-06-01 21:00 -- 2018:22:5:21:00
        (new Time())->init(1527883200)->save(); // 2018-06-01 22:00 -- 2018:22:5:22:00
        (new Time())->init(1527887400)->save(); // 2018-06-01 23:10 -- 2018:22:5:23:10
        (new Time())->init(1527915000)->save(); // 2018-06-02 06:50 -- 2018:22:6:6:50
        (new Time())->init(1527921600)->save(); // 2018-06-02 08:40 -- 2018:22:6:8:40
        (new Time())->init(1527931200)->save(); // 2018-06-02 11:20 -- 2018:22:6:11:20
        (new Time())->init(1527934500)->save(); // 2018-06-02 12:15 -- 2018:22:6:12:15
        (new Time())->init(1527945000)->save(); // 2018-06-02 15:10 -- 2018:22:6:15:10
        (new Time())->init(1527948600)->save(); // 2018-06-02 16:10 -- 2018:22:6:16:10
        (new Time())->init(1527949800)->save(); // 2018-06-02 16:30 -- 2018:22:6:16:30
        (new Time())->init(1527959400)->save(); // 2018-06-02 19:10 -- 2018:22:6:19:10
        (new Time())->init(1527966000)->save(); // 2018-06-02 21:00 -- 2018:22:6:21:00
        (new Time())->init(1527970800)->save(); // 2018-06-02 22:20 -- 2018:22:6:22:20
        (new Time())->init(1527994800)->save(); // 2018-06-03 05:00 -- 2018:22:7:5:00
        (new Time())->init(1527999300)->save(); // 2018-06-03 06:15 -- 2018:22:7:6:15
        (new Time())->init(1528007700)->save(); // 2018-06-03 08:35 -- 2018:22:7:8:35
        (new Time())->init(1528016700)->save(); // 2018-06-03 11:05 -- 2018:22:7:11:05
        (new Time())->init(1528023300)->save(); // 2018-06-03 12:55 -- 2018:22:7:12:55
        (new Time())->init(1528030200)->save(); // 2018-06-03 14:50 -- 2018:22:7:14:50
        (new Time())->init(1528032900)->save(); // 2018-06-03 15:35 -- 2018:22:7:15:35
        (new Time())->init(1528037700)->save(); // 2018-06-03 16:55 -- 2018:22:7:16:55
        (new Time())->init(1528048500)->save(); // 2018-06-03 19:55 -- 2018:22:7:19:55
        (new Time())->init(1528054500)->save(); // 2018-06-03 21:35 -- 2018:22:7:21:35
    }

    public static function fixtureWeek1(): void {
        (new Time())->init(1528085700)->save(); // 2018-06-04 06:15 -- 2018:23:1:6:15
        (new Time())->init(1528095600)->save(); // 2018-06-04 09:00 -- 2018:23:1:9:00
        (new Time())->init(1528106400)->save(); // 2018-06-04 12:00 -- 2018:23:1:12:00
        (new Time())->init(1528114800)->save(); // 2018-06-04 14:20 -- 2018:23:1:14:20
        (new Time())->init(1528118400)->save(); // 2018-06-04 15:20 -- 2018:23:1:15:20
        (new Time())->init(1528122600)->save(); // 2018-06-04 16:30 -- 2018:23:1:16:30
        (new Time())->init(1528128900)->save(); // 2018-06-04 18:15 -- 2018:23:1:18:15
        (new Time())->init(1528139700)->save(); // 2018-06-04 21:15 -- 2018:23:1:21:15
        (new Time())->init(1528147500)->save(); // 2018-06-04 23:25 -- 2018:23:1:23:25
        (new Time())->init(1528170900)->save(); // 2018-06-05 05:55 -- 2018:23:2:5:55
        (new Time())->init(1528172100)->save(); // 2018-06-05 06:15 -- 2018:23:2:6:15
        (new Time())->init(1528176900)->save(); // 2018-06-05 07:35 -- 2018:23:2:7:35
        (new Time())->init(1528180500)->save(); // 2018-06-05 08:35 -- 2018:23:2:8:35
        (new Time())->init(1528182000)->save(); // 2018-06-05 09:00 -- 2018:23:2:9:00
        (new Time())->init(1528189800)->save(); // 2018-06-05 11:10 -- 2018:23:2:11:10
        (new Time())->init(1528199100)->save(); // 2018-06-05 13:45 -- 2018:23:2:13:45
        (new Time())->init(1528206000)->save(); // 2018-06-05 15:40 -- 2018:23:2:15:40
        (new Time())->init(1528215000)->save(); // 2018-06-05 18:10 -- 2018:23:2:18:10
        (new Time())->init(1528221600)->save(); // 2018-06-05 20:00 -- 2018:23:2:20:00
        (new Time())->init(1528232400)->save(); // 2018-06-05 23:00 -- 2018:23:2:23:00
        (new Time())->init(1528235100)->save(); // 2018-06-05 23:45 -- 2018:23:2:23:45
        (new Time())->init(1528259700)->save(); // 2018-06-06 06:35 -- 2018:23:3:6:35
        (new Time())->init(1528267500)->save(); // 2018-06-06 08:45 -- 2018:23:3:8:45
        (new Time())->init(1528269000)->save(); // 2018-06-06 09:10 -- 2018:23:3:9:10
        (new Time())->init(1528272900)->save(); // 2018-06-06 10:15 -- 2018:23:3:10:15
        (new Time())->init(1528276200)->save(); // 2018-06-06 11:10 -- 2018:23:3:11:10
        (new Time())->init(1528279800)->save(); // 2018-06-06 12:10 -- 2018:23:3:12:10
        (new Time())->init(1528287000)->save(); // 2018-06-06 14:10 -- 2018:23:3:14:10
        (new Time())->init(1528295100)->save(); // 2018-06-06 16:25 -- 2018:23:3:16:25
        (new Time())->init(1528305300)->save(); // 2018-06-06 19:15 -- 2018:23:3:19:15
        (new Time())->init(1528307700)->save(); // 2018-06-06 19:55 -- 2018:23:3:19:55
        (new Time())->init(1528312800)->save(); // 2018-06-06 21:20 -- 2018:23:3:21:20
        (new Time())->init(1528317300)->save(); // 2018-06-06 22:35 -- 2018:23:3:22:35
        (new Time())->init(1528320600)->save(); // 2018-06-06 23:30 -- 2018:23:3:23:30
        (new Time())->init(1528349100)->save(); // 2018-06-07 07:25 -- 2018:23:4:7:25
        (new Time())->init(1528359600)->save(); // 2018-06-07 10:20 -- 2018:23:4:10:20
        (new Time())->init(1528364400)->save(); // 2018-06-07 11:40 -- 2018:23:4:11:40
        (new Time())->init(1528369200)->save(); // 2018-06-07 13:00 -- 2018:23:4:13:00
        (new Time())->init(1528371000)->save(); // 2018-06-07 13:30 -- 2018:23:4:13:30
        (new Time())->init(1528372200)->save(); // 2018-06-07 13:50 -- 2018:23:4:13:50
        (new Time())->init(1528375500)->save(); // 2018-06-07 14:45 -- 2018:23:4:14:45
        (new Time())->init(1528378200)->save(); // 2018-06-07 15:30 -- 2018:23:4:15:30
        (new Time())->init(1528382100)->save(); // 2018-06-07 16:35 -- 2018:23:4:16:35
        (new Time())->init(1528384800)->save(); // 2018-06-07 17:20 -- 2018:23:4:17:20
        (new Time())->init(1528395300)->save(); // 2018-06-07 20:15 -- 2018:23:4:20:15
        (new Time())->init(1528397100)->save(); // 2018-06-07 20:45 -- 2018:23:4:20:45
        (new Time())->init(1528400100)->save(); // 2018-06-07 21:35 -- 2018:23:4:21:35
        (new Time())->init(1528401300)->save(); // 2018-06-07 21:55 -- 2018:23:4:21:55
        (new Time())->init(1528426200)->save(); // 2018-06-08 04:50 -- 2018:23:5:4:50
        (new Time())->init(1528435500)->save(); // 2018-06-08 07:25 -- 2018:23:5:7:25
        (new Time())->init(1528437900)->save(); // 2018-06-08 08:05 -- 2018:23:5:8:05
        (new Time())->init(1528447200)->save(); // 2018-06-08 10:40 -- 2018:23:5:10:40
        (new Time())->init(1528452000)->save(); // 2018-06-08 12:00 -- 2018:23:5:12:00
        (new Time())->init(1528458600)->save(); // 2018-06-08 13:50 -- 2018:23:5:13:50
        (new Time())->init(1528459800)->save(); // 2018-06-08 14:10 -- 2018:23:5:14:10
        (new Time())->init(1528470300)->save(); // 2018-06-08 17:05 -- 2018:23:5:17:05
        (new Time())->init(1528472700)->save(); // 2018-06-08 17:45 -- 2018:23:5:17:45
        (new Time())->init(1528482900)->save(); // 2018-06-08 20:35 -- 2018:23:5:20:35
        (new Time())->init(1528487700)->save(); // 2018-06-08 21:55 -- 2018:23:5:21:55
        (new Time())->init(1528511400)->save(); // 2018-06-09 04:30 -- 2018:23:6:4:30
        (new Time())->init(1528518900)->save(); // 2018-06-09 06:35 -- 2018:23:6:6:35
        (new Time())->init(1528524300)->save(); // 2018-06-09 08:05 -- 2018:23:6:8:05
        (new Time())->init(1528534500)->save(); // 2018-06-09 10:55 -- 2018:23:6:10:55
        (new Time())->init(1528536600)->save(); // 2018-06-09 11:30 -- 2018:23:6:11:30
        (new Time())->init(1528538700)->save(); // 2018-06-09 12:05 -- 2018:23:6:12:05
        (new Time())->init(1528545900)->save(); // 2018-06-09 14:05 -- 2018:23:6:14:05
        (new Time())->init(1528549500)->save(); // 2018-06-09 15:05 -- 2018:23:6:15:05
        (new Time())->init(1528557900)->save(); // 2018-06-09 17:25 -- 2018:23:6:17:25
        (new Time())->init(1528566000)->save(); // 2018-06-09 19:40 -- 2018:23:6:19:40
        (new Time())->init(1528574700)->save(); // 2018-06-09 22:05 -- 2018:23:6:22:05
        (new Time())->init(1528601700)->save(); // 2018-06-10 05:35 -- 2018:23:7:5:35
        (new Time())->init(1528605900)->save(); // 2018-06-10 06:45 -- 2018:23:7:6:45
        (new Time())->init(1528616700)->save(); // 2018-06-10 09:45 -- 2018:23:7:9:45
        (new Time())->init(1528620900)->save(); // 2018-06-10 10:55 -- 2018:23:7:10:55
        (new Time())->init(1528630800)->save(); // 2018-06-10 13:40 -- 2018:23:7:13:40
        (new Time())->init(1528632000)->save(); // 2018-06-10 14:00 -- 2018:23:7:14:00
        (new Time())->init(1528634700)->save(); // 2018-06-10 14:45 -- 2018:23:7:14:45
        (new Time())->init(1528643700)->save(); // 2018-06-10 17:15 -- 2018:23:7:17:15
        (new Time())->init(1528646100)->save(); // 2018-06-10 17:55 -- 2018:23:7:17:55
        (new Time())->init(1528650900)->save(); // 2018-06-10 19:15 -- 2018:23:7:19:15
        (new Time())->init(1528657500)->save(); // 2018-06-10 21:05 -- 2018:23:7:21:05
        (new Time())->init(1528662600)->save(); // 2018-06-10 22:30 -- 2018:23:7:22:30
    }

    public static function fixtureWeek2(): void {
        (new Time())->init(1528682700)->save(); // 2018-06-11 04:05 -- 2018:24:1:4:05
        (new Time())->init(1528692600)->save(); // 2018-06-11 06:50 -- 2018:24:1:6:50
        (new Time())->init(1528700700)->save(); // 2018-06-11 09:05 -- 2018:24:1:9:05
        (new Time())->init(1528704900)->save(); // 2018-06-11 10:15 -- 2018:24:1:10:15
        (new Time())->init(1528715100)->save(); // 2018-06-11 13:05 -- 2018:24:1:13:05
        (new Time())->init(1528719300)->save(); // 2018-06-11 14:15 -- 2018:24:1:14:15
        (new Time())->init(1528720500)->save(); // 2018-06-11 14:35 -- 2018:24:1:14:35
        (new Time())->init(1528726200)->save(); // 2018-06-11 16:10 -- 2018:24:1:16:10
        (new Time())->init(1528733100)->save(); // 2018-06-11 18:05 -- 2018:24:1:18:05
        (new Time())->init(1528741500)->save(); // 2018-06-11 20:25 -- 2018:24:1:20:25
        (new Time())->init(1528749600)->save(); // 2018-06-11 22:40 -- 2018:24:1:22:40
        (new Time())->init(1528752600)->save(); // 2018-06-11 23:30 -- 2018:24:1:23:30
        (new Time())->init(1528780200)->save(); // 2018-06-12 07:10 -- 2018:24:2:7:10
        (new Time())->init(1528786500)->save(); // 2018-06-12 08:55 -- 2018:24:2:8:55
        (new Time())->init(1528797000)->save(); // 2018-06-12 11:50 -- 2018:24:2:11:50
        (new Time())->init(1528802400)->save(); // 2018-06-12 13:20 -- 2018:24:2:13:20
        (new Time())->init(1528810200)->save(); // 2018-06-12 15:30 -- 2018:24:2:15:30
        (new Time())->init(1528813800)->save(); // 2018-06-12 16:30 -- 2018:24:2:16:30
        (new Time())->init(1528824000)->save(); // 2018-06-12 19:20 -- 2018:24:2:19:20
        (new Time())->init(1528828500)->save(); // 2018-06-12 20:35 -- 2018:24:2:20:35
        (new Time())->init(1528831800)->save(); // 2018-06-12 21:30 -- 2018:24:2:21:30
        (new Time())->init(1528834800)->save(); // 2018-06-12 22:20 -- 2018:24:2:22:20
        (new Time())->init(1528839000)->save(); // 2018-06-12 23:30 -- 2018:24:2:23:30
        (new Time())->init(1528861500)->save(); // 2018-06-13 05:45 -- 2018:24:3:5:45
        (new Time())->init(1528866000)->save(); // 2018-06-13 07:00 -- 2018:24:3:7:00
        (new Time())->init(1528869000)->save(); // 2018-06-13 07:50 -- 2018:24:3:7:50
        (new Time())->init(1528870200)->save(); // 2018-06-13 08:10 -- 2018:24:3:8:10
        (new Time())->init(1528872300)->save(); // 2018-06-13 08:45 -- 2018:24:3:8:45
        (new Time())->init(1528878000)->save(); // 2018-06-13 10:20 -- 2018:24:3:10:20
        (new Time())->init(1528887600)->save(); // 2018-06-13 13:00 -- 2018:24:3:13:00
        (new Time())->init(1528897200)->save(); // 2018-06-13 15:40 -- 2018:24:3:15:40
        (new Time())->init(1528905000)->save(); // 2018-06-13 17:50 -- 2018:24:3:17:50
        (new Time())->init(1528908300)->save(); // 2018-06-13 18:45 -- 2018:24:3:18:45
        (new Time())->init(1528919100)->save(); // 2018-06-13 21:45 -- 2018:24:3:21:45
        (new Time())->init(1528921800)->save(); // 2018-06-13 22:30 -- 2018:24:3:22:30
        (new Time())->init(1528925400)->save(); // 2018-06-13 23:30 -- 2018:24:3:23:30
        (new Time())->init(1528952700)->save(); // 2018-06-14 07:05 -- 2018:24:4:7:05
        (new Time())->init(1528957500)->save(); // 2018-06-14 08:25 -- 2018:24:4:8:25
        (new Time())->init(1528965300)->save(); // 2018-06-14 10:35 -- 2018:24:4:10:35
        (new Time())->init(1528968900)->save(); // 2018-06-14 11:35 -- 2018:24:4:11:35
        (new Time())->init(1528974600)->save(); // 2018-06-14 13:10 -- 2018:24:4:13:10
        (new Time())->init(1528984200)->save(); // 2018-06-14 15:50 -- 2018:24:4:15:50
        (new Time())->init(1528990200)->save(); // 2018-06-14 17:30 -- 2018:24:4:17:30
        (new Time())->init(1528992900)->save(); // 2018-06-14 18:15 -- 2018:24:4:18:15
        (new Time())->init(1528995300)->save(); // 2018-06-14 18:55 -- 2018:24:4:18:55
        (new Time())->init(1528998900)->save(); // 2018-06-14 19:55 -- 2018:24:4:19:55
        (new Time())->init(1529001000)->save(); // 2018-06-14 20:30 -- 2018:24:4:20:30
        (new Time())->init(1529011200)->save(); // 2018-06-14 23:20 -- 2018:24:4:23:20
        (new Time())->init(1529033400)->save(); // 2018-06-15 05:30 -- 2018:24:5:5:30
        (new Time())->init(1529037300)->save(); // 2018-06-15 06:35 -- 2018:24:5:6:35
        (new Time())->init(1529046900)->save(); // 2018-06-15 09:15 -- 2018:24:5:9:15
        (new Time())->init(1529056800)->save(); // 2018-06-15 12:00 -- 2018:24:5:12:00
        (new Time())->init(1529064300)->save(); // 2018-06-15 14:05 -- 2018:24:5:14:05
        (new Time())->init(1529066700)->save(); // 2018-06-15 14:45 -- 2018:24:5:14:45
        (new Time())->init(1529072700)->save(); // 2018-06-15 16:25 -- 2018:24:5:16:25
        (new Time())->init(1529081100)->save(); // 2018-06-15 18:45 -- 2018:24:5:18:45
        (new Time())->init(1529086200)->save(); // 2018-06-15 20:10 -- 2018:24:5:20:10
        (new Time())->init(1529093400)->save(); // 2018-06-15 22:10 -- 2018:24:5:22:10
        (new Time())->init(1529117700)->save(); // 2018-06-16 04:55 -- 2018:24:6:4:55
        (new Time())->init(1529121900)->save(); // 2018-06-16 06:05 -- 2018:24:6:6:05
        (new Time())->init(1529128800)->save(); // 2018-06-16 08:00 -- 2018:24:6:8:00
        (new Time())->init(1529133600)->save(); // 2018-06-16 09:20 -- 2018:24:6:9:20
        (new Time())->init(1529138700)->save(); // 2018-06-16 10:45 -- 2018:24:6:10:45
        (new Time())->init(1529139900)->save(); // 2018-06-16 11:05 -- 2018:24:6:11:05
        (new Time())->init(1529142900)->save(); // 2018-06-16 11:55 -- 2018:24:6:11:55
        (new Time())->init(1529145900)->save(); // 2018-06-16 12:45 -- 2018:24:6:12:45
        (new Time())->init(1529156100)->save(); // 2018-06-16 15:35 -- 2018:24:6:15:35
        (new Time())->init(1529160600)->save(); // 2018-06-16 16:50 -- 2018:24:6:16:50
        (new Time())->init(1529164500)->save(); // 2018-06-16 17:55 -- 2018:24:6:17:55
        (new Time())->init(1529166300)->save(); // 2018-06-16 18:25 -- 2018:24:6:18:25
        (new Time())->init(1529168100)->save(); // 2018-06-16 18:55 -- 2018:24:6:18:55
        (new Time())->init(1529175900)->save(); // 2018-06-16 21:05 -- 2018:24:6:21:05
        (new Time())->init(1529178300)->save(); // 2018-06-16 21:45 -- 2018:24:6:21:45
        (new Time())->init(1529182500)->save(); // 2018-06-16 22:55 -- 2018:24:6:22:55
        (new Time())->init(1529200800)->save(); // 2018-06-17 04:00 -- 2018:24:7:4:00
        (new Time())->init(1529207400)->save(); // 2018-06-17 05:50 -- 2018:24:7:5:50
        (new Time())->init(1529217600)->save(); // 2018-06-17 08:40 -- 2018:24:7:8:40
        (new Time())->init(1529227200)->save(); // 2018-06-17 11:20 -- 2018:24:7:11:20
        (new Time())->init(1529230500)->save(); // 2018-06-17 12:15 -- 2018:24:7:12:15
        (new Time())->init(1529238000)->save(); // 2018-06-17 14:20 -- 2018:24:7:14:20
        (new Time())->init(1529246700)->save(); // 2018-06-17 16:45 -- 2018:24:7:16:45
        (new Time())->init(1529249700)->save(); // 2018-06-17 17:35 -- 2018:24:7:17:35
        (new Time())->init(1529259900)->save(); // 2018-06-17 20:25 -- 2018:24:7:20:25
        (new Time())->init(1529270100)->save(); // 2018-06-17 23:15 -- 2018:24:7:23:15
    }

    public static function fixtureWeek3(): void {
        (new Time())->init(1529290200)->save(); // 2018-06-18 04:50 -- 2018:25:1:4:50
        (new Time())->init(1529301000)->save(); // 2018-06-18 07:50 -- 2018:25:1:7:50
        (new Time())->init(1529310600)->save(); // 2018-06-18 10:30 -- 2018:25:1:10:30
        (new Time())->init(1529319900)->save(); // 2018-06-18 13:05 -- 2018:25:1:13:05
        (new Time())->init(1529323800)->save(); // 2018-06-18 14:10 -- 2018:25:1:14:10
        (new Time())->init(1529328300)->save(); // 2018-06-18 15:25 -- 2018:25:1:15:25
        (new Time())->init(1529334300)->save(); // 2018-06-18 17:05 -- 2018:25:1:17:05
        (new Time())->init(1529336100)->save(); // 2018-06-18 17:35 -- 2018:25:1:17:35
        (new Time())->init(1529344200)->save(); // 2018-06-18 19:50 -- 2018:25:1:19:50
        (new Time())->init(1529347500)->save(); // 2018-06-18 20:45 -- 2018:25:1:20:45
        (new Time())->init(1529353500)->save(); // 2018-06-18 22:25 -- 2018:25:1:22:25
        (new Time())->init(1529375700)->save(); // 2018-06-19 04:35 -- 2018:25:2:4:35
        (new Time())->init(1529382300)->save(); // 2018-06-19 06:25 -- 2018:25:2:6:25
        (new Time())->init(1529392200)->save(); // 2018-06-19 09:10 -- 2018:25:2:9:10
        (new Time())->init(1529397000)->save(); // 2018-06-19 10:30 -- 2018:25:2:10:30
        (new Time())->init(1529407500)->save(); // 2018-06-19 13:25 -- 2018:25:2:13:25
        (new Time())->init(1529417700)->save(); // 2018-06-19 16:15 -- 2018:25:2:16:15
        (new Time())->init(1529418900)->save(); // 2018-06-19 16:35 -- 2018:25:2:16:35
        (new Time())->init(1529426700)->save(); // 2018-06-19 18:45 -- 2018:25:2:18:45
        (new Time())->init(1529429400)->save(); // 2018-06-19 19:30 -- 2018:25:2:19:30
        (new Time())->init(1529430600)->save(); // 2018-06-19 19:50 -- 2018:25:2:19:50
        (new Time())->init(1529435700)->save(); // 2018-06-19 21:15 -- 2018:25:2:21:15
        (new Time())->init(1529471400)->save(); // 2018-06-20 07:10 -- 2018:25:3:7:10
        (new Time())->init(1529480700)->save(); // 2018-06-20 09:45 -- 2018:25:3:9:45
        (new Time())->init(1529483100)->save(); // 2018-06-20 10:25 -- 2018:25:3:10:25
        (new Time())->init(1529490000)->save(); // 2018-06-20 12:20 -- 2018:25:3:12:20
        (new Time())->init(1529491800)->save(); // 2018-06-20 12:50 -- 2018:25:3:12:50
        (new Time())->init(1529493900)->save(); // 2018-06-20 13:25 -- 2018:25:3:13:25
        (new Time())->init(1529500800)->save(); // 2018-06-20 15:20 -- 2018:25:3:15:20
        (new Time())->init(1529511000)->save(); // 2018-06-20 18:10 -- 2018:25:3:18:10
        (new Time())->init(1529516100)->save(); // 2018-06-20 19:35 -- 2018:25:3:19:35
        (new Time())->init(1529524800)->save(); // 2018-06-20 22:00 -- 2018:25:3:22:00
    }


    /**
     * @return array
     */
    public static function week0day5(): array {
        return ['1527821400', '1527825600', '1527830700', '1527837600', '1527839400', '1527848700', '1527849900', '1527853800', '1527857100', '1527859800', '1527865200', '1527874500', '1527879600', '1527883200', '1527887400',];
    }

    /**
     * @return array
     */
    public static function week0day6(): array {
        return ['1527915000', '1527921600', '1527931200', '1527934500', '1527945000', '1527948600', '1527949800', '1527959400', '1527966000', '1527970800',];
    }

    /**
     * @return array
     */
    public static function week0day7(): array {
        return ['1527994800', '1527999300', '1528007700', '1528016700', '1528023300', '1528030200', '1528032900', '1528037700', '1528048500', '1528054500',];
    }

    /**
     * @return array
     */
    public static function week1day1(): array {
        return ['1528085700', '1528095600', '1528106400', '1528114800', '1528118400', '1528122600', '1528128900', '1528139700', '1528147500',];
    }

    /**
     * @return array
     */
    public static function week1day2(): array {
        return ['1528170900', '1528172100', '1528176900', '1528180500', '1528182000', '1528189800', '1528199100', '1528206000', '1528215000', '1528221600', '1528232400', '1528235100',];
    }

    /**
     * @return array
     */
    public static function week1day3(): array {
        return ['1528259700', '1528267500', '1528269000', '1528272900', '1528276200', '1528279800', '1528287000', '1528295100', '1528305300', '1528307700', '1528312800', '1528317300', '1528320600',];
    }

    /**
     * @return array
     */
    public static function week1day4(): array {
        return ['1528349100', '1528359600', '1528364400', '1528369200', '1528371000', '1528372200', '1528375500', '1528378200', '1528382100', '1528384800', '1528395300', '1528397100', '1528400100', '1528401300',];
    }

    /**
     * @return array
     */
    public static function week1day5(): array {
        return ['1528426200', '1528435500', '1528437900', '1528447200', '1528452000', '1528458600', '1528459800', '1528470300', '1528472700', '1528482900', '1528487700',];
    }

    /**
     * @return array
     */
    public static function week1day6(): array {
        return ['1528511400', '1528518900', '1528524300', '1528534500', '1528536600', '1528538700', '1528545900', '1528549500', '1528557900', '1528566000', '1528574700',];
    }

    /**
     * @return array
     */
    public static function week1day7(): array {
        return ['1528601700', '1528605900', '1528616700', '1528620900', '1528630800', '1528632000', '1528634700', '1528643700', '1528646100', '1528650900', '1528657500', '1528662600',];
    }

    /**
     * @return array
     */
    public static function week2day1(): array {
        return ['1528682700', '1528692600', '1528700700', '1528704900', '1528715100', '1528719300', '1528720500', '1528726200', '1528733100', '1528741500', '1528749600', '1528752600',];
    }

    /**
     * @return array
     */
    public static function week2day2(): array {
        return ['1528780200', '1528786500', '1528797000', '1528802400', '1528810200', '1528813800', '1528824000', '1528828500', '1528831800', '1528834800', '1528839000',];
    }

    /**
     * @return array
     */
    public static function week2day3(): array {
        return ['1528861500', '1528866000', '1528869000', '1528870200', '1528872300', '1528878000', '1528887600', '1528897200', '1528905000', '1528908300', '1528919100', '1528921800', '1528925400',];
    }

    /**
     * @return array
     */
    public static function week2day4(): array {
        return ['1528952700', '1528957500', '1528965300', '1528968900', '1528974600', '1528984200', '1528990200', '1528992900', '1528995300', '1528998900', '1529001000', '1529011200',];
    }

    /**
     * @return array
     */
    public static function week2day5(): array {
        return ['1529033400', '1529037300', '1529046900', '1529056800', '1529064300', '1529066700', '1529072700', '1529081100', '1529086200', '1529093400',];
    }

    /**
     * @return array
     */
    public static function week2day6(): array {
        return ['1529117700', '1529121900', '1529128800', '1529133600', '1529138700', '1529139900', '1529142900', '1529145900', '1529156100', '1529160600', '1529164500', '1529166300', '1529168100', '1529175900', '1529178300', '1529182500',];
    }

    /**
     * @return array
     */
    public static function week2day7(): array {
        return ['1529200800', '1529207400', '1529217600', '1529227200', '1529230500', '1529238000', '1529246700', '1529249700', '1529259900', '1529270100',];
    }

    /**
     * @return array
     */
    public static function week3day1(): array {
        return ['1529290200', '1529301000', '1529310600', '1529319900', '1529323800', '1529328300', '1529334300', '1529336100', '1529344200', '1529347500', '1529353500',];
    }

    /**
     * @return array
     */
    public static function week3day2(): array {
        return ['1529375700', '1529382300', '1529392200', '1529397000', '1529407500', '1529417700', '1529418900', '1529426700', '1529429400', '1529430600', '1529435700',];
    }

    /**
     * @return array
     */
    public static function week3day3(): array {
        return ['1529471400', '1529480700', '1529483100', '1529490000', '1529491800', '1529493900', '1529500800', '1529511000', '1529516100', '1529524800',];
    }

    /**
     * @return array
     */
    public static function week3day4(): array {
        return ['1529553000', '1529558100', '1529563800', '1529566800', '1529575200', '1529579700', '1529586900', '1529590800', '1529592900', '1529601000', '1529610000',];
    }

    /**
     * @return array
     */
    public static function week3day5(): array {
        return ['1529637000', '1529640300', '1529642100', '1529652300', '1529658900', '1529669100', '1529672100', '1529682900', '1529686200', '1529693100', '1529702400',];
    }

    /**
     * @return array
     */
    public static function week3day6(): array {
        return ['1529724000', '1529733000', '1529736900', '1529739900', '1529747100', '1529748600', '1529752200', '1529753700', '1529762100', '1529772600', '1529781300', '1529788200',];
    }

    /**
     * @return array
     */
    public static function week3day7(): array {
        return ['1529817300', '1529826900', '1529836800', '1529842800', '1529851200', '1529861700', '1529872200',];
    }
}