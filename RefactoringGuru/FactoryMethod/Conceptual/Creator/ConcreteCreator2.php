<?php

namespace RefactoringGuru\FactoryMethod\Conceptual\Creator;

use RefactoringGuru\FactoryMethod\Conceptual\Product\Product;
use RefactoringGuru\FactoryMethod\Conceptual\Product\ConcreteProduct2;

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}
