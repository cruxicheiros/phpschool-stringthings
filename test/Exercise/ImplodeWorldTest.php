<?php
namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit\Framework\TestCase;

class ImplodeWorldTest extends TestCase
{
    public function testImplodeWorldExercise()
    {
        $e = new ImplodeWorld;
        $this->assertEquals('Implode World', $e->getName());
        $this->assertEquals('Use the implode function to join strings', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertGreaterThanOrEqual(3, count($e->getArgs()));
        $this->assertLessThanOrEqual(20, count($e->getArgs()));

        foreach ($e->getArgs() as $arg) {
            $this->assertInternalType("string", $arg);
        }

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}