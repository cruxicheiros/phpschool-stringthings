<?php
namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit\Framework\TestCase;

class CountWordsTest extends TestCase
{
    public function testCountWordsExercise()
    {
        $e = new CountWords();
        $this->assertEquals('Count Words', $e->getName());
        $this->assertEquals('Get top 5 words from a text', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertSame(1, count($e->getArgs()));
        $this->assertFileExists($e->getArgs()[0]);

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}