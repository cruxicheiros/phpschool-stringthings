<?php

namespace PhpSchool\StringThings\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;

class TheKey extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'The Key';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Vigenere Cipher';
    }


    /**
     * @return string[][]
     */
    public function getArgs()
    {
        $printable_ords = range(32, 126);
        shuffle($printable_ords);

        $chars = array_map("chr", $printable_ords);

        shuffle($printable_ords);
        $key = array_map("chr", array_slice($printable_ords, 0, rand(5, 15)));

        return [implode($chars), implode($key)];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}

