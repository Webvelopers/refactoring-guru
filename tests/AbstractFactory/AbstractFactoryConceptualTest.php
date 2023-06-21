<?php

use RefactoringGuru\AbstractFactory\Conceptual\AbstractFactory;
use RefactoringGuru\AbstractFactory\Conceptual\ConcreteFactory1;
use RefactoringGuru\AbstractFactory\Conceptual\ConcreteFactory2;

use PHPUnit\Framework\TestCase;

final class AbstractFactoryConceptualTest extends TestCase
{
    /**
     * The client code works with factories and products only through abstract
     * types: AbstractFactory and AbstractProduct. This lets you pass any factory or
     * product subclass to the client code without breaking it.
     */
    private function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }

    public function testClientCode(): void
    {
        echo "\n\n";
        echo "Abstract Factory Conceptual Test";
        echo "\n\n";

        /**
         * The client code can work with any concrete factory class.
         */
        echo "Client: Testing client code with the first factory type:\n";
        $this->clientCode(new ConcreteFactory1());
        echo "Client: Testing the same client code with the second factory type:\n";
        $this->clientCode(new ConcreteFactory2());

        $this->assertInstanceOf(AbstractFactory::class, new ConcreteFactory1());
        $this->assertInstanceOf(AbstractFactory::class, new ConcreteFactory2());
    }
}
