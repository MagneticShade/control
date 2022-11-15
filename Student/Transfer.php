<?php
namespace control\Student;
use DateTime;
class Transfer
{
    private array $transferHistory=[];

        public function transfer(\Student $student,\GroupInterface $newGroup, string $reason, DateTime $transferDate){
        array_push($this->transferHistory,$student,$newGroup, $reason,$transferDate);
        $student->getGroup()->removeStudent($student);
        $student->setGroup($newGroup);

    }
    public function getTransferHistory(): array
    {
        return $this->transferHistory;
    }
}