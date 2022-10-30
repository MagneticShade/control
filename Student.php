<?php
class Student extends \College\Entities\Human
{
public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender,private string $group,private DateTime $assignmentDate)
{
\College\Entities\Human::__construct($firstName,$lastName,$birthDate,$gender);
}
public function getGroup():string{
    return $this->group;
}
public function getAssignmentDate(){
    return $this->assignmentDate;
}
}