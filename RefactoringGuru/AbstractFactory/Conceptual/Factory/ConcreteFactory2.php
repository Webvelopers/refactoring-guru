<?php

namespace RefactoringGuru\AbstractFactory\Conceptual\Factory;

use RefactoringGuru\AbstractFactory\Conceptual\Product\A\AbstractProductA;
use RefactoringGuru\AbstractFactory\Conceptual\Product\A\ConcreteProductA2;
use RefactoringGuru\AbstractFactory\Conceptual\Product\B\AbstractProductB;
use RefactoringGuru\AbstractFactory\Conceptual\Product\B\ConcreteProductB2;

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}
