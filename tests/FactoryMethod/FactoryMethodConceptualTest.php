<?php

use RefactoringGuru\FactoryMethod\Conceptual\Creator;
use RefactoringGuru\FactoryMethod\Conceptual\ConcreteCreator1;
use RefactoringGuru\FactoryMethod\Conceptual\ConcreteCreator2;

use PHPUnit\Framework\TestCase;

final class FactoryMethodConceptualTest extends TestCase
{
    /**
     * The client code works with an instance of a concrete creator, albeit through
     * its base interface. As long as the client keeps working with the creator via
     * the base interface, you can pass it any creator's subclass.
     */
    private function clientCode(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
            . $creator->someOperation()."\n";
        // ...
    }

    public function testClientCode(): void
    {
        echo "\n\n";
        echo "Factory Method Conceptual Test";
        echo "\n\n";
        /**
         * The Application picks a creator's type depending on the configuration or
         * environment.
         */
        echo "App: Launched with the ConcreteCreator1.\n";
        $this->clientCode(new ConcreteCreator1());
        echo "App: Launched with the ConcreteCreator2.\n";
        $this->clientCode(new ConcreteCreator2());

        $this->assertInstanceOf(Creator::class, new ConcreteCreator1());
        $this->assertInstanceOf(Creator::class, new ConcreteCreator2());
    }
}
