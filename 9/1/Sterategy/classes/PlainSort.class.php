<?php
    
    class PlainSort implements SortingSterategy {
        public function getSortedSet($set) {
        sort($set);
        return $set;
        }
        }
