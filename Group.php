<?php

class Group
{
public function __construct(private Student $student,private Teacher $teacher,private string $specialty,private DateTime $creation){

}

    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    public function getStudent(): Student
    {
        return $this->student;
    }

    public function getCreation(): DateTime
    {
        return $this->creation;
    }

    public function getTeacher(): Teacher
    {
        return $this->teacher;
    }
    public function setTeacher(Teacher $teacher): void
    {
        $this->teacher = $teacher;
    }
}