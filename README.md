# Electronic

## Problem Description
In this problem, I was required to get a class called ElectronicItem 
and separate its types into other classes (subclasses).

Class: ElectronicItem
* Types:
    * Console
    * Television
    * Microwave
    * Controller

However, some electronic items can contain extra items and other don't.

## Proposed solution
My proposed solution was to use Composite, which is a design pattern that allows to compose objects into a tree structure and also represent part-whole hierarchies.
However, for the sake of simplicity I didn't implement some methods regarding the controlling of the tree structure since the problem doesn't require more than two level for the tree, because a child node (Leaf)
is not going to be necessarily a parent node (Composite).
In the other hand, the two level tree structure allows to sum the parent node and its child nodes up. 

Thereby I divided ElectronicItem types into subclasses:
* Class: ElectronicItem (Component)
* Subclasses: 
    * Console (Composite)
    * Television (Composite)
    * Microwave (Leaf)
    * Controller (Leaf)

## Usage:
To run the solution put the code into a server that runs php and open the Scenario.php 
through some browser with the configured localhost 