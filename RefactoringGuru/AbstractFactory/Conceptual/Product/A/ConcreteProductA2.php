<?php

namespace RefactoringGuru\AbstractFactory\Conceptual\Product\A;

class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}
