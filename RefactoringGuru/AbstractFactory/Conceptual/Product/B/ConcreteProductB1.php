<?php

namespace RefactoringGuru\AbstractFactory\Conceptual\Product\B;

use RefactoringGuru\AbstractFactory\Conceptual\Product\A\AbstractProductA;

class ConcreteProductB1 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}
