<?php

namespace RefactoringGuru\AbstractFactory\Conceptual\Product\B;

use RefactoringGuru\AbstractFactory\Conceptual\Product\A\AbstractProductA;

interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}
