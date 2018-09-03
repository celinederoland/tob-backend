<?php
/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 25.08.18
 * Time: 06:07
 */

namespace Tob;

use \DateTime;

class Time implements \JsonSerializable {

    private $timestamp;
    /** @var DateTime */
    private $date;

    /**
     * @param int $timestamp
     * @return Time
     */
    public function init($timestamp): Time {

        $this->timestamp = $timestamp;
        $this->date      = new DateTime('@' . $timestamp);
        $this->date->setTimezone(new \DateTimeZone(date_default_timezone_get()));
        return $this;
    }

    /**
     * @return int
     */
    public function time() {

        return intval($this->timestamp);
    }

    /**
     * @return int
     */
    public function year(): int {

        return intval($this->date->format('o'));
    }

    /**
     * @return int
     */
    public function week(): int {

        return intval($this->date->format('W'));
    }

    /**
     * @return string
     */
    public function fullWeek(): string {

        return $this->date->format('o:W');
    }

    /**
     * @return int
     */
    public function day(): int {

        return intval($this->date->format('N'));
    }

    /**
     * @return string
     */
    public function fullDay(): string {

        return $this->date->format('o:W:N');
    }


    /**
     * @return int
     */
    public function hour(): int {

        return intval($this->date->format('G'));
    }

    /**
     * @return int
     */
    public function minute(): int {

        return intval($this->date->format('i'));
    }

    /**
     * @return string
     */
    public function key(): string {

        return $this->date->format('o:W');
    }


    /**
     * @return string
     */
    public function field(): string {

        return $this->date->format('N:G:i');
    }

    /**
     * @return Time
     */
    public function save(): Time {

        Config::connection()->hset($this->key(), $this->field(), $this->time());
        return $this;
    }

    /**
     * @return Time
     */
    public function delete(): Time {

        Config::connection()->hdel($this->key(), [$this->field()]);
        return $this;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {

        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function weekStartTime(): int {

        return $this->time() - (($this->day() - 1) * Constants::ONE_DAY + $this->hour() * Constants::ONE_HOUR + $this->minute() * Constants::ONE_MINUTE);
    }

    /**
     * @return int
     */
    public function weekEndTime(): int {

        return $this->weekStartTime() + Constants::ONE_WEEK;
    }

    /**
     * @return int
     */
    public function dayStartTime(): int {

        return $this->time() - ($this->hour() * Constants::ONE_HOUR + $this->minute() * Constants::ONE_MINUTE);
    }

    /**
     * @return int
     */
    public function dayEndTime(): int {

        return $this->dayStartTime() + Constants::ONE_DAY;
    }

}