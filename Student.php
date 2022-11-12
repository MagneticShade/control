<?php
class Student extends \College\Entities\Human
{
    private bool $expelled = false;
    private ?DateTime $expDate = null;

    public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender, private GroupInterface $group, private DateTime $assignmentDate)
    {
        parent::__construct($firstName, $lastName, $birthDate, $gender);
        $group->setStudent($this);
    }

    public function getGroup():GroupInterface
    {
        return $this->group;
    }

    public function getAssignmentDate(): DateTime
    {
        return $this->assignmentDate;
    }

    public function Expel(bool $status, DateTime $exp): void
    {
        $this->expelled = $status;
        $this->expDate = $exp;
    }
}