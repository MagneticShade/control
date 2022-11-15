<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
            DIRECTORY_SEPARATOR,
            explode('\\', str_replace('control', '', $class))
        ) . '.php';
});
$teacher=new Teacher(
    'Nikita',
    'Nikitov',
    new DateTime('2004-01-01'),
    'boy',
    "ISP 20-22",
    "3 years",
    "PHP");

$group=new GroupT($teacher,'isp 20-22',new DateTime(2020-01-01));
$group2=new GroupT($teacher,'Gips 20-22',new DateTime(2019-01-01));

$student=new Student(
  'Avan',
  'ivanov',
  new DateTime('2020-01-01'),
  'boy',
  $group,
  new DateTime('2020-01-01'));
$student->setMiddleName('ivanovich');
$student->Expel(true,new DateTime(2020-01-01));
$teacher->setMiddleName('Nikitovich');
print_r($student->getGroup());

$student->transfer($group2,"abrams",new DateTime(2020-01-01));
print_r($student->getGroup());

