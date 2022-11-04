<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
            DIRECTORY_SEPARATOR,
            explode('\\', str_replace('control', '', $class))
        ) . '.php';
});


$student=new Student(
  'Avan',
  'ivanov',
  new DateTime('2020-01-01'),
  'boy',
  "ISP 20-22",
  new DateTime('2020-01-01'));
$student->setMiddleName('ivanovich');
$student->Expel(true,new DateTime(2020-01-01));
echo($student->status());
$teacher=new Teacher(
    'Nikita',
    'Nikitov',
    new DateTime('2004-01-01'),
    'boy',
    "ISP 20-22",
    "3 years",
    "PHP");
$teacher->setMiddleName('Nikitovich');
$teacher->Expel(true,new DateTime(2004-01-01));
echo($teacher->status());
$group=new Group($student,$teacher,"abra", new DateTime('2020-01-01'));
echo ($group->getStudent()->getFullName());
