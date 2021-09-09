<?php

interface Imputable{
    public function getName(): string;
    public function setImputValue(string $value);
    public function getImputValue();
}