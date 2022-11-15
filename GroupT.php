<?php

class GroupT implements GroupInterface

{
    private array $studArr=[];
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

    public function getStudents(): array
    {
        return $this->studArr;
    }

    public function getStudent(Student $student):?Student
    {
        if (($key = array_search($student, $this->studArr)) !== false) {
            return $this->studArr[$key];
        }
        return null;
    }

    public function getTeacher(): Teacher
    {
       return $this->teacher;
    }

    public function setTeacher(Teacher $teacher): void
    {
        $this->teacher=$teacher;
    }
    
    public function setStudent(?Student $student): void
    {
        array_push($this->studArr,$student);
    }

    public function removeStudent(Student $student):void{
        if (($key = array_search($student, $this->studArr)) !== false) {
            unset($this->studArr[$key]);
        }
    }

}