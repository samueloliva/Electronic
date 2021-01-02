<?php

include_once("ElectronicItem.php");

/**
 * Leaf - primitive type
 */
class Microwave extends ElectronicItem {

    public function __construct() {
        $this->setType(self::ELECTRONIC_ITEM_MICROWAVE);
        $this->setPrice($price);
        $this->setWired(true);
    }

    /**
     * Returns max number of items
     * @return int
     */
    public function maxExtras() {
        # Microwave can't have any extras
        return 0;
    }
    
}


?>