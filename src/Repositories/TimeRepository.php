<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 16.08.18
 * Time: 05:47
 */

namespace Tob;

use phpDocumentor\Reflection\Types\Boolean;

class TimeRepository {

    use EuclideanDivision;

    /** @var Time */
    private $start;
    /** @var Time */
    private $end;

    private static $instance;

    public static function instance() {

        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * TimeRepository constructor.
     */
    private function __construct() {

        $this->init();
    }

    /**
     * @param null $start
     * @return TimeRepository
     */
    public function initializeDatabase($start = null): TimeRepository {

        $start = is_null($start) ? Config::currentTime() : $start;
        Config::connection()->set('start', $start);
        $this->init();
        return $this;
    }

    public function isInitialized(): Boolean {

        return is_null(Config::connection()->get('start'));
    }

    /**
     *
     */
    private function init() {

        $start = Config::connection()->get('start');
        $start = is_null($start) ? Config::currentTime() : $start;
        $end   = Config::currentTime();

        $this->start = (new Time())->init($start);
        $this->end   = (new Time())->init($end);
    }

    /**
     * @return array
     */
    public function getAvailable(): array {


        $available = [];

        $weekEndTime = $this->end->weekEndTime();
        $currentTime = $this->start->weekStartTime();

        while ($currentTime < $weekEndTime) {

            $available[] = $currentTime;
            $currentTime += Constants::ONE_WEEK;
        }

        return $available;
    }

    /**
     * @param $start_time
     * @return Week
     * @throws InvalidException
     */
    public function get($start_time): Week {

        $values =
            Config::connection()->hgetall((new Time())->init($start_time)->key());

        $week = new Week($start_time);
        foreach ($values as $value) {

            $week->addTime((new Time())->init($value));
        }
        return $week;
    }

    /**
     * @return array
     * @throws InvalidException
     */
    public function aggregateAll() {

        $values = [];

        foreach ($this->getAvailable() as $available) {

            $values['w-' . $available] = $this->get($available);
        }
        return $values;
    }

}