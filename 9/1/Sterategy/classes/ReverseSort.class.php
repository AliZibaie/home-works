<?php

class ReverseSort implements SortingSterategy {
    public function getSortedSet($set) {
    rsort($set);
    return $set;
    }
    }
