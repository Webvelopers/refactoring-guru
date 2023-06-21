<?php

namespace RefactoringGuru\FactoryMethod\Conceptual\Product;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
