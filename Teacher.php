<?php
class Teacher extends \College\Entities\Human
{
    private bool $expelled=false;
    private ?DateTime $expDate=null;
public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender, private string $department, private string $workExperience, private string $subjects)
{
\College\Entities\Human::__construct($firstName,$lastName,$birthDate,$gender);
}
public function getDepartment():string{
    return $this->department;
}
public function getworkExperience(){
    return $this->workExperience;
}
public function getSubjects(){
    return $this->subjects;
}
public function Expel(bool $status,DateTime $exp):void{
$this->expelled=$status;
$this->expDate=$exp;
}
public function status(){
    if ($this->expelled==false){
        return 'Учитель числится в кафедре' . ' ' . $this->getDepartment();
    }
return 'Учитель уволен' . ' ' . $this->expDate->format('Y-m-d');
}
}