<?php
namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit\Framework\TestCase;

class ConcatWorldTest extends TestCase
{
    public function testConcatWorldExercise()
    {
        $e = new ConcatWorld;
        $this->assertEquals('Concat World', $e->getName());
        $this->assertEquals('Concatenate 2 strings', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertSame(2, count($e->getArgs()));

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}