<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
            DIRECTORY_SEPARATOR,
            explode('\\', str_replace('control', '', $class))
        ) . '.php';
});


$student=new Student(
  'ivan',
  'ivanov',
  new DateTime(),
  'boy',
  "ISP 20-22", assignmentDate: new DateTime());
echo ($student->getFullName());
echo ($student->getGroup());
 ($student->getAssignmentDate());