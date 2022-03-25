<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Thiago Gomes',
    new \DateTimeImmutable('1992-03-13'),
);

echo $student->age();
