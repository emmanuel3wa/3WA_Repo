<?php

class Search
{
    public function __construct(
        public array $seq,
        public int $pos
    ) {
    }
}

function serchSeq(array $seq, array $ocu):int{
    $countSeq = count($seq);
    $countOcu = count($ocu);

    if($countOcu > $countSeq)
        return -1;

    $index = 0;
    foreach ($seq as $key => $value) {
        if($index === $countOcu )
            return $key - $index;
        if ($value === $ocu[$index]){
            $index = $index + 1;
            var_dump($index);
        } else 
            $index = 0;
        var_dump($index);
    }

    return -1;
}

function search_pos_seq_all(array $seq, array $ocu){
    return new Search ($ocu, serchSeq($seq, $ocu));
}

var_dump(search_pos_seq_all([1,5,8,6,7,55,7,5,5], [7,55]));