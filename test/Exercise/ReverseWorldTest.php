<?php
namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit\Framework\TestCase;

class ReverseWorldTest extends TestCase
{
    public function testConcatWorldExercise()
    {
        $e = new ReverseWorld();
        $this->assertEquals('Reverse World', $e->getName());
        $this->assertEquals('Reverse order of words in a string', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertSame(1, count($e->getArgs()));

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}