<?php
namespace PhpSchool\StringThings\Exercise;

use phpDocumentor\Reflection\Types\Integer;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit\Framework\TestCase;

class AsciiShiftTest extends TestCase
{
    public function testAsciiShiftExercise()
    {
        $e = new AsciiShift();
        $this->assertEquals('Ascii Shift', $e->getName());
        $this->assertEquals('Apply a shift cipher to an ASCII string', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertSame(2, count($e->getArgs()));

        $this->assertInternalType("string", $e->getArgs()[0]);
        $this->assertInternalType("int", $e->getArgs()[1]);


        $ord_values = range(32, 126);
        $chars = array_map("chr", $ord_values);

        foreach ($chars as $char) {
            $this->assertContains($char, $e->getArgs()[0]);
        }

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}