<?php

/**
 * This class is the base Component and declares commom operations for both 
 * simple and complex objects. 
 * I defined the class as abstract because of it allows to have properties 
 * and concrete and abstract methods
 */
abstract class ElectronicItem 
{
    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    private $type;
    public $wired;

    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    const ELECTRONIC_ITEM_CONTROLLER = 'controller';

    private static $types = array(
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE, 
        self::ELECTRONIC_ITEM_TELEVISION, 
        self::ELECTRONIC_ITEM_CONTROLLER
    );
    
    /**
     * The Component class can provide some default implementation for these methods
     */
    function getPrice()
    {
        return $this->price;
    }

    function getType()
    {
        return $this->type;
    }

    function getWired()
    {
        return $this->wired;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function setType($type)
    {
        $this->type = $type;
    }

    function setWired($wired)
    {
        $this->wired = $wired;
    }

    /**
     * As the this method is going to be implemented by the subclasses
     * I must set it as an abstract method and specify its signiture
     */
    public abstract function maxExtras();

    /**
     * For the sake of simplicity and considering the problem requirements 
     * some methods for controlling the Composite tree-like structure 
     * don't need to be strictly created.
     * So I let these methods specified as TODO tasks
     * @todo create isComposite() method
     * @todo create getParent() method 
     * @todo create setParent(ElectronicItem $item) method
     */

}

?>