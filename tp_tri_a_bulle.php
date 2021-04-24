<?php

function bubble_sort($tab) {
    $cout_tab = count($tab);

	for($i=0; $i<$cout_tab-1; $i++) {
		for($j=0; $j<($cout_tab-1-$i); $j++) {
			if ($tab[$j] > $tab[$j+1] ) {
				$temp = $tab[$j+1];
				$tab[$j+1] = $tab[$j];
				$tab[$j] = $temp;
			}
		}
	}
	return $tab;
}

function sort_asc($tab){
    sort($tab);
    return $tab;
}

function sort_desc($tab){
    rsort($tab);
    return $tab;
}

function bubble_sort_twice(array $tab, callable $order){
    var_dump($order(bubble_sort($tab)));
}

bubble_sort_twice([1,5,3,8,9,4], 'sort_desc');
bubble_sort_twice([1,5,3,8,9,4], 'sort_asc');