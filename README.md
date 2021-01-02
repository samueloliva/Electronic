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
There are two alternatives to solve this problem: Composite and Composition.
* Composite: is a partition design pattern that allows to compose objects int a tree structure.
* Composition: is an object oriented concept that defines a class as the sum of its parts, where classes and objects are loosely coupled.

My proposed solution was to use Composition, due to its simplicity and flexibility.
Composite is a complex solution that can deal with this problem, but it requires to create some features to control the parent and child relationship and to provide recursion. However, in this problem there is no need of treating the items in a tree-like structure since the tree would be of just two levels, so there wouldn't be a situation that a child node would also be a parent node. 
For example: A Television can have a Controller, but the Controller can't have any child.
Hence the recursion wouldn't be necessary here.

In the other hand, Composition is a simple solution to create the relationship which, one object can contain another one, providing also the sense of ownership. That is, when a parent is destroyed, all children are also destroyed. 

Thereby I divided ElectronicItem types into subclasses:
* Class: ElectronicItem
* Subclasses: 
    * Console
    * Television
    * Microwave
    * Controller

## Usage:
To run the solution put the code into a server that runs php and open the Scenario.php 
through some browser with the configured localhost 