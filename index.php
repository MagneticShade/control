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
    'м',
    "ISP 20-22",
    "3 years",
    "PHP");

$group=new GroupT($teacher,'isp 20-22',new DateTime(2020-01-01));
$group2=new GroupT($teacher,'Gips 20-22',new DateTime(2019-01-01));

$student=new Student(
  'Avan',
  'ivanov',
  new DateTime('2020-01-01'),
  'м',
  $group,
  new DateTime('2020-01-01'));
$student->setMiddleName('ivanovich');
$student->Expel(true,new DateTime(2020-01-01));
$teacher->setMiddleName('Nikitovich');



 $connect= new Mysqli(username: 'root',hostname: '127.0.0.1',database: 'college');
//    $connect->query(
//        "insert into `teachers`(`fname`,`mname`,`lname`,`gender`,`birth_date`)
//              values('{$teacher->getFirstName()}','{$teacher->getMiddleName()}','{$teacher->getLastName()}','{$teacher->getGender()}','{$teacher->getBirthDate()->format('Y-d-m')}');"
//    );
//$last_id = $connect->insert_id;
//   $connect->query(
//       "insert into `groups`(`name`,`curator_id`) values ('ИСП 20-22',{$last_id})");
//
// $connect->query("
//    insert into `students` (`fname`, `mname`, `lname`, `gender`, `birth_date`, `group_id`)
//    values ('{$student->getFirstName()}','{$student->getMiddleName()}','{$student->getLastName()}','{$student->getGender()}','{$student->getBirthDate()->format('Y-d-m')}','{$last_id}')");
//

 $result=$connect->query('select * from `students`;');
 $students = [];
 if ($result->num_rows>0){
     while($row=$result->fetch_assoc()){
         array_push($students, $row);
     }
 }

 require 'index.html';