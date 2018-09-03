<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 11:19
 */

namespace Tob;


class MockCurrentTime extends CurrentTime {

    private $time;

    public function __construct($time) {

        $this->time = $time;
    }

    public function time() {

        return $this->time;
    }
}