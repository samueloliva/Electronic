<?php

include_once("ElectronicItem.php");

/**
 * Leaf - primitive type
 */
class Controller extends ElectronicItem 
{
    public function __construct($price, $wired) {
        $this->setType(self::ELECTRONIC_ITEM_CONTROLLER);
        $this->setPrice($price);
        $this->setWired($wired);
    }

    /**
     * Returns number max of extra items
     * @return int
     */
    public function maxExtras() {
        // Controller can't have any extras
        return 0;
    }
}

?>