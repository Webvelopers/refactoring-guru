<?php

namespace RefactoringGuru\AbstractFactory\Conceptual\Product\A;

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}
