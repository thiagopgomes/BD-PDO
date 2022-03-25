<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realiza processos de definição da turma

$connection->beginTransaction();

$aStudent = new Student(
    null,
    'Tomas Jefersson',
    new DateTimeImmutable('1990-05-15')
);
$studentRepository->save($aStudent);

$novoStudent = new Student(
    null,
    'joaquim Nunseidasquantas',
    new DateTimeImmutable('2012-12-02')
);
$studentRepository->save($novoStudent);

// inserir os alunos da turma

$connection->commit();