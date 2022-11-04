<?php
class Student extends \College\Entities\Human
{   private ?array $transfers=null;
    private bool $expelled=false;
    private ?DateTime $expDate=null;
public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender,private string $group,private DateTime $assignmentDate)
{
parent::__construct($firstName,$lastName,$birthDate,$gender);
}
public function getGroup():string{
    return $this->group;
}
public function getAssignmentDate(){
    return $this->assignmentDate;
}
public function Expel(bool $status,DateTime $exp):void{
$this->expelled=$status;
$this->expDate=$exp;
}
public function status():string{
    if ($this->expelled==false){
        return 'Студент числится в группе' . ' ' . $this->getGroup();
    }
return 'Студент отчислен' . ' ' . $this->expDate->format('Y-m-d');
}
public function transfer( string $reason, DateTime $trDate):void{
    $this->transfers+=array("reason"=>$reason,"Date"=>$trDate->format('Y-m-d'));
}
public function getTransfHistory():string{
    if ($this->transfers==null){
        return "Студент не переводился";
    }
    return implode('',$this->transfers) ;
}
}
