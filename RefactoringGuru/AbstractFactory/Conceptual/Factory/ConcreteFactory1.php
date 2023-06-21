<?php

namespace RefactoringGuru\AbstractFactory\Conceptual\Factory;

use RefactoringGuru\AbstractFactory\Conceptual\Product\A\AbstractProductA;
use RefactoringGuru\AbstractFactory\Conceptual\Product\A\ConcreteProductA1;
use RefactoringGuru\AbstractFactory\Conceptual\Product\B\AbstractProductB;
use RefactoringGuru\AbstractFactory\Conceptual\Product\B\ConcreteProductB1;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}
