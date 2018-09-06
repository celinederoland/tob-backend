<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 18.08.18
 * Time: 07:34
 */

namespace Tob;


Trait TimeController {

    /**
     * @return array
     */
    public function available() {

        return TimeRepository::instance()->getAvailable();
    }

    /**
     * @param $week
     * @return Week
     * @throws InvalidException
     */
    public function get($week) {

        return TimeRepository::instance()->get($week);
    }

    /**
     * @return array
     * @throws InvalidException
     */
    public function getAll() {

        return TimeRepository::instance()->aggregateAll();
    }

    /**
     * @param $timestamp
     * @return array
     * @throws InvalidException
     */
    public function add($timestamp) {

        if(TimeRepository::instance()->isInitialized()) {
            TimeRepository::instance()->initializeDatabase($timestamp);
        }
        $time        = (new Time())->init($timestamp)->save();
        $update_week = $time->weekStartTime();
        $update_day  = $time->dayStartTime();
        return [ 'should_update' => 'w-' . $time->weekStartTime(), 'data' => $this->get($update_week)];
    }

    /**
     * @param $times
     * @return array
     * @throws InvalidException
     */
    public function multiAdd($times) {

        foreach ($times as $timestamp) {
            $time        = (new Time())->init($timestamp)->save();
        }
        return $this->getAll();
    }

    public function remove($timestamp) {

        $time        = (new Time())->init($timestamp)->delete();
        $update_week = $time->weekStartTime();
        $update_day  = $time->dayStartTime();
        return [ 'should_update' => 'w-' . $time->weekStartTime(), 'data' => $this->get($update_week)];
    }
}