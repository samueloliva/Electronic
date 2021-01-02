<?php

include_once("ElectronicItems.php");
include_once("Console.php");
include_once("Controller.php");
include_once("Television.php");

## Person buys ##

# 1 console 
$console = new Console(300);
# with 2 remote controllers (wired is false)
$console->add(new Controller(30, false));
$console->add(new Controller(30, false));
# with 2 wired controllers (wired is true)
$console->add(new Controller(30, true));
$console->add(new Controller(30, true));

# 2 televisions
$television1 = new Television(750.5);
$television2 = new Television(600);
# TV#1 has 2 remote controllers (wired is false)
$television1->add(new Controller(30, false));
$television1->add(new Controller(30, false));
# TV#2 has 1 remote controller (wired is false)
$television2->add(new Controller(30, false));

$eletronicItems = new ElectronicItems([$console, $television1, $television2]);

echo "<br> # Question 1: Total Pricing # <br>";
$sorted = $eletronicItems->getSortedItems("ASC");
echo $eletronicItems->showItems($sorted);
echo "Total price: " . $eletronicItems->getTotalPrice();
echo "<br><br># Question 2 - Purchase Info #<br>";
echo $console->getPurchaseInfo();

?>