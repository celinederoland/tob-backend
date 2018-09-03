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

    /**
     * @param Time $t
     * @return Day
     * @throws InvalidException
     */
    public function addTime(Time $t): Day {

        if(!$this->isEmpty() && $this->fullDay() !== $t->fullDay()) {
            throw new InvalidException('This time is not in the same day');
        }
        $this->timestamps[] = $t;
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

        usort($this->timestamps,function (Time $a, Time $b) { return $a->time() - $b->time(); });
        return ['data' => $this->timestamps, 'stats' => []];
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool {
        return empty($this->timestamps);
    }
}