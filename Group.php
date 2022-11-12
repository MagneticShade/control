<?php

class Group
{
    private ?Student $student=null;
    private array $students=[];
public function __construct(private Teacher $teacher,private string $specialty,private DateTime $creation){

}

    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    public function setStudent(?Student $student): void
    {
        $this->student = $student;
        array_push($this->students,$student);
    }
    public function getStudent(): ?Student
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