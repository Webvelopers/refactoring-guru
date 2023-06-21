<?php

namespace RefactoringGuru\AbstractFactory\Conceptual\Factory;

use RefactoringGuru\AbstractFactory\Conceptual\Product\A\AbstractProductA;
use RefactoringGuru\AbstractFactory\Conceptual\Product\B\AbstractProductB;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}
