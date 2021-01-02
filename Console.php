<?php

include_once("ElectronicItem.php");

/**
 * Composed class - can have extra items 
 */
class Console extends ElectronicItem {
    /**
     * List of eletronic items attached to an item that compose it
     * @var array
     */
    private $extraItems = array();
    
    /**
     * Initialize EletronicItem's properties  
     * @param float $price EletronicItem's price
     */
    public function __construct($price) {
        $this->setType(self::ELECTRONIC_ITEM_CONSOLE);
        $this->setPrice($price);
        $this->setWired(true);
    }

    /**
     * Returns the max number of extra items 
     * @return int 
     */
    public function maxExtras() {
        return 4;
    }

    /**
     * @param EletronicItem $item Item to be added 
     * @return void
     */
    public function add(ElectronicItem $item) {
        if (count($this->extraItems) >= $this->maxExtras()) {
            return;
        }
        $this->extraItems[] = $item;
    }

    /**
     * @param EletronicItem $item Item to be removed
     * @return void
     */
    public function remove(ElectronicItem $item) {
        $extraItems = array();
        foreach ($this->extraItems as $extra) {
            if ($item !== $item) {
                $extraItems[] = $extra;
            }
        }
        $this->extraItems = $extraItems;
    }

    /**
     * Returns the sum of prices of Console and its extra items
     * @return float
     */
    public function getPrice() {
        $sum = parent::getPrice();
        foreach ($this->extraItems as $extraItem) {
            $sum += $extraItem->getPrice();
        }
        return $sum;
    }

    /**
     * Returns the Console's purchase info
     * @return string 
     */
    public function getPurchaseInfo() {
        $output = "";
        $productPrice = "Item: " . $this->getType() . " Price: " . $this->price . "<br>"; 
        $output .= $productPrice;
        foreach($this->extraItems as $extraItem) {
            $extraPrice = "- extra item: " . $extraItem->getType() . " price: " . $extraItem->getPrice() . "<br>";
            $output .= $extraPrice;
        }
        return $output;
    }

    /**
     * @todo 
     */
}

?>