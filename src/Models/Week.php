<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 07:48
 */

namespace Tob;


class Week implements \JsonSerializable {

    /** @var Day[] */
    private $days     = [];
    private $ref_time = null;

    public function __construct($time = null) {

        !is_null($time) ? $this->ref_time = (new Time())->init($time) : null;
    }

    /**
     * @param Time $t
     * @return Week
     * @throws InvalidException
     */
    public function addTime(Time $t): Week {

        if (!$this->isEmpty() && $this->fullWeek() !== $t->fullWeek()) {
            throw new InvalidException('This time is not in the same week');
        }
        if (!isset($this->days[$t->day()])) {
            $this->days[$t->day()] = new Day();
        }
        $this->days[$t->day()]->addTime($t);
        return $this;
    }

    /**
     * @param Day $d
     * @return Week
     * @throws InvalidException
     */
    public function addDay(Day $d): Week {

        if (!$this->isEmpty() && $this->fullWeek() !== $d->fullWeek()) {
            throw new InvalidException('This day is not in the same week');
        }
        $this->days[$d->day()] = $d;
        return $this;
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function week() {

        if (isset($this->ref_time)) {
            return $this->ref_time->week();
        }

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get week on empty week');
        }
        return reset($this->days)->week();
    }

    /**
     * @return string
     * @throws InvalidException
     */
    public function fullWeek() {

        if (isset($this->ref_time)) {
            return $this->ref_time->fullWeek();
        }
        if ($this->isEmpty()) {
            throw new InvalidException('Try to get fullWeek on empty week');
        }
        return reset($this->days)->fullWeek();
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function weekStartTime() {

        if (isset($this->ref_time)) {
            return $this->ref_time->weekStartTime();
        }
        if ($this->isEmpty()) {
            throw new InvalidException('Try to get weekStartTime on empty week');
        }
        return reset($this->days)->weekStartTime();
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function weekEndTime() {

        if (isset($this->ref_time)) {
            return $this->ref_time->weekStartTime();
        }
        if ($this->isEmpty()) {
            throw new InvalidException('Try to get weekEndTime on empty week');
        }
        return reset($this->days)->weekEndTime();
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     * @throws InvalidException
     */
    public function jsonSerialize() {

        $indexed_days = [];

        $days = array_values($this->days);
        /** @var Day $day */
        while ($day = array_pop($days)) {
            $indexed_days['d-' . $day->dayStartTime()] = $day;
        }

        $start = $this->weekStartTime();
        for ($i = 0; $i < 7; $i++) {
            if (!isset($indexed_days['d-' . ($start + $i * Constants::ONE_DAY)]))
                $indexed_days['d-' . ($start + $i * Constants::ONE_DAY)] = new Day();
        }

        ksort($indexed_days);
        return ['data' => $indexed_days, 'stats' => []];
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool {
        return !isset($this->ref_time) && empty($this->days);
    }
}