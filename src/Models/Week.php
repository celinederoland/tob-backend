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
    private $last_day = 1;

    public function __construct($time = null) {

        !is_null($time) ? $this->ref_time = (new Time())->init($time) : null;
        for ($i = 1; $i <= 7; $i++) $this->days[$i] = new Day();
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
        if (!isset($this->ref_time)) {
            $this->ref_time = $t;
        }

        $day_num        = $t->day();
        $this->last_day = max($day_num, $this->last_day);
        $this->days[$day_num]->addTime($t);
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
        throw new InvalidException('Try to get week on empty week');
    }

    /**
     * @return string
     * @throws InvalidException
     */
    public function fullWeek() {

        if (isset($this->ref_time)) {
            return $this->ref_time->fullWeek();
        }
        throw new InvalidException('Try to get fullWeek on empty week');
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function weekStartTime() {

        if (isset($this->ref_time)) {
            return $this->ref_time->weekStartTime();
        }
        throw new InvalidException('Try to get weekStartTime on empty week');
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function weekEndTime() {

        if (isset($this->ref_time)) {
            return $this->ref_time->weekStartTime();
        }
        throw new InvalidException('Try to get weekEndTime on empty week');
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

        $start = $this->weekStartTime();
        for ($i = 0; $i < 7; $i++) {
            if (!isset($indexed_days['d-' . ($start + $i * Constants::ONE_DAY)]))
                $indexed_days['d-' . ($start + $i * Constants::ONE_DAY)] = $this->days[$i + 1];
        }

        ksort($indexed_days);
        return [
            'data'  => $indexed_days,
            'stats' => [
                'count'       => $this->count(),
                'duration'    => $this->duration(),
                'min_gap'     => $this->minGap(),
                'max_gap'     => $this->maxGap(),
                'average_gap' => $this->averageGap(),
            ]
        ];
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool {
        return !isset($this->ref_time) && $this->days[$this->last_day]->isEmpty();
    }

    private function average(\Closure $closure) {

        $total = 0;
        for ($i = 1; $i <= $this->last_day; $i++) $total += $closure($this->days[$i]);
        return intval($total / $this->last_day);
    }

    public function count() {

        return $this->average(function (Day $d) { return $d->count(); });
    }

    public function duration() {

        return $this->average(function (Day $d) { return $d->duration(); });
    }


    public function minGap() {

        return $this->average(function (Day $d) { return $d->minGap(); });
    }

    public function maxGap() {

        return $this->average(function (Day $d) { return $d->maxGap(); });
    }

    public function averageGap() {

        return $this->average(function (Day $d) { return $d->averageGap(); });
    }


}