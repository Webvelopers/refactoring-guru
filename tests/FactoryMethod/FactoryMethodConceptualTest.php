<?php

use RefactoringGuru\FactoryMethod\Conceptual\Creator\Creator;
use RefactoringGuru\FactoryMethod\Conceptual\Creator\ConcreteCreator1;
use RefactoringGuru\FactoryMethod\Conceptual\Creator\ConcreteCreator2;

use PHPUnit\Framework\TestCase;

final class FactoryMethodConceptualTest extends TestCase
{
    private function clientCode(Creator $creator)
    {
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
            . $creator->someOperation() . "\n";
    }

    public function testClientCode(): void
    {
        echo "\n\n";
        echo "Factory Method Conceptual Test";
        echo "\n\n";

        echo "App: Launched with the ConcreteCreator1.\n";
        $this->clientCode(new ConcreteCreator1());
        echo "App: Launched with the ConcreteCreator2.\n";
        $this->clientCode(new ConcreteCreator2());

        $this->assertInstanceOf(Creator::class, new ConcreteCreator1());
        $this->assertInstanceOf(Creator::class, new ConcreteCreator2());
    }
}
