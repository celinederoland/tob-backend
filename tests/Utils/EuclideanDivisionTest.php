<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 08:39
 */

namespace Tob;


class EuclideanDivisionTest extends TestCase {

    use EuclideanDivision;

    public function testDivision() {

        list($q, $r) = $this->euclideanDivision(46, 8);
        self::assertEquals(5, $q);
        self::assertEquals(6, $r);
    }
}