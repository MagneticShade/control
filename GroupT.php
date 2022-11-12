<?php

class GroupT implements GroupInterface

{
    private ?Student $student=null;
    public function __construct(private Teacher $teacher,private string $specialty,private DateTime $creation){

    }

public function getCreation(): DateTime
{
return $this->creation;
}
public function getSpecialty(): string
{
return $this->specialty;
}
public function getStudent():?Student
{
return $this->student;
}
public function getTeacher(): Teacher
{
   return $this->teacher;
}
public function setStudent(?Student $student): void
{
$this->student=$student;
}
public function setTeacher(Teacher $teacher): void
{
   $this->teacher=$teacher;
}
}