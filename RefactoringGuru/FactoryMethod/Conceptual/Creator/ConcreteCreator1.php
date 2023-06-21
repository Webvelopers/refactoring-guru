<?php

namespace RefactoringGuru\FactoryMethod\Conceptual\Creator;

use RefactoringGuru\FactoryMethod\Conceptual\Product\Product;
use RefactoringGuru\FactoryMethod\Conceptual\Product\ConcreteProduct1;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}
