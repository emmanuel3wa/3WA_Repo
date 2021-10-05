<?php

class Even implements Iterator {

    
    public function __construct(private int $position = 0, private int $max) {
        $this->setMax($this->max);
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->position * 2;
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        if (($this->position * 2) < $this->max)
            return true;
        return false;
    }

    public function setMax(int $maximum){
        if ($maximum > 0)
            $this->max = $maximum;
        else
            throw new InvalidArgumentException('Max must be more than 0.');
    }
}