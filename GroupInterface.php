<?php

interface GroupInterface
{
    public function getSpecialty(): string;

    public function setStudent(?Student $student): void;

    public function getStudent(Student $student): ?Student;

    public function removeStudent(Student $student):void;

    public function getCreation(): DateTime;

    public function getTeacher(): Teacher;

    public function setTeacher(Teacher $teacher):void;
}
