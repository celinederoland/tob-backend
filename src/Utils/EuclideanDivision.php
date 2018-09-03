<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 08:16
 */

namespace Tob;


trait EuclideanDivision {

    public function euclideanDivision($dividend, $divisor) {

        $q = intdiv($dividend, $divisor);
        $r = $dividend % $divisor;
        return [$q, $r];
    }
}