<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 26.08.18
 * Time: 07:45
 */

namespace Tob;

class Day implements \JsonSerializable {

    /** @var Time[] */
    private $timestamps = [];

    private $count    = 0;
    private $duration = 16 * Constants::ONE_HOUR;
    private $min_gap  = Constants::ONE_DAY;
    private $max_gap  = Constants::ONE_DAY;

    /**
     * @param Time $t
     * @return Day
     * @throws InvalidException
     */
    public function addTime(Time $t): Day {

        if (!$this->isEmpty() && $this->fullDay() !== $t->fullDay()) {
            throw new InvalidException('This time is not in the same day');
        }
        $this->timestamps[] = $t;

        $this->count++;

        if ($this->count === 1) {
            $this->min_gap = $this->max_gap = $this->duration;
            return $this;
        }

        if ($this->timestamps[$this->count - 1] < $this->timestamps[$this->count - 2]) $this->sort();

        $gap = $this->timestamps[$this->count - 1]->time() - $this->timestamps[$this->count - 2]->time();

        if ($this->count === 2) {
            $this->min_gap = $this->max_gap = $this->duration = $gap;
            return $this;
        }

        $this->duration += $gap;
        if ($this->min_gap > $gap) $this->min_gap = $gap;
        if ($this->max_gap < $gap) $this->max_gap = $gap;

        return $this;
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function day() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get day on empty day');
        }
        return $this->timestamps[0]->day();
    }

    /**
     * @return string
     * @throws InvalidException
     */
    public function fullDay() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get fullDay on empty day');
        }
        return $this->timestamps[0]->fullDay();
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function week() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get week on empty day');
        }
        return $this->timestamps[0]->week();
    }

    /**
     * @return string
     * @throws InvalidException
     */
    public function fullWeek() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get fullWeek on empty day');
        }
        return $this->timestamps[0]->fullWeek();
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function weekStartTime() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get weekStartTime on empty day');
        }
        return $this->timestamps[0]->weekStartTime();
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function weekEndTime() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get weekEndTime on empty day');
        }
        return $this->timestamps[0]->weekEndTime();
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function dayStartTime() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get day start time on empty day');
        }
        return $this->timestamps[0]->dayStartTime();
    }

    /**
     * @return int
     * @throws InvalidException
     */
    public function dayEndTime() {

        if ($this->isEmpty()) {
            throw new InvalidException('Try to get day end time on empty day');
        }
        return $this->timestamps[0]->dayEndTime();
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {

        return [
            'data'  => $this->timestamps,
            'stats' => [
                'count'       => $this->count,
                'duration'    => $this->duration,
                'min_gap'     => $this->min_gap,
                'max_gap'     => $this->max_gap,
                'average_gap' => $this->averageGap(),
            ]
        ];
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool {
        return empty($this->timestamps);
    }


    public function count() {

        return $this->count;
    }

    public function duration() {

        return $this->duration;
    }


    public function minGap() {

        return $this->min_gap;
    }

    public function maxGap() {

        return $this->max_gap;
    }

    public function averageGap() {

        return $this->count < 2 ? $this->min_gap : intval($this->duration / ($this->count - 1));
    }

    private function sort() {

        usort($this->timestamps, function (Time $a, Time $b) { return $a->time() - $b->time(); });
    }
}