<?php

class Queue implements ArrayAccess {

private int $i = 0;

public function __construct(
    private array $container = [
    ]
) {}

public function offsetSet($offset, $value) {
    if (is_null($offset)) {
        $this->container[] = $value;
    } else {
        $this->container[$offset] = $value;
    }
}

public function clear(){
    $this->container = array();
    $this->i = 0;
}

public function clearPop(){
    $this->i = 0;
}

public function pop(){
    $currIndex = 0;

    if ($this->i >= count($this->container))
        echo "End of queue";

    foreach ($this->container as $value){
        if ($this->i === $currIndex){
            echo $value;
            $this->i++;
            break;
        }
        $currIndex++;
    }
    echo PHP_EOL;
}

public function push($value){
    $this->container[] = $value;
}


public function offsetExists($offset) {
    return isset($this->container[$offset]);
}

public function offsetUnset($offset) {
    unset($this->container[$offset]);
}

public function offsetGet($offset) {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
}
}

$queue = new Queue();
$queue->push(1);
$queue->push(2);
$queue->push(3);
print_r($queue);
$queue->clear();
$queue["deux"] = "Une valeur";
var_dump($queue["deux"]);
$queue[] = 'Ajout 1';
$queue[] = 'Ajout 2';
$queue[] = 'Ajout 3';
$queue->pop();
$queue->pop();
$queue->pop();
$queue->pop();
$queue->pop();
$queue->clearPop();
$queue->pop();
$queue->clear();
print_r($queue);

