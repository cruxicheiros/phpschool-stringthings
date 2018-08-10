<?php

namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;

class AsciiShift extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Ascii Shift';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Apply a shift cipher to an ASCII string';
    }


    /**
     * @return string[][]
     */
    public function getArgs()
    {
        $ord_values = range(32, 126);
        shuffle($ord_values);

        $chars = array_map("chr", $ord_values);

        $string = implode($chars);
        $shift = rand(1, 80);

        return [$string, $shift];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}

