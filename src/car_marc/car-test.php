<?php

    require "Car.php";
    require "Course.php";


    $jean = new Car("Peugeot", "Jean", 10);
    $paul = new Car("Renault", "Paul", 20);
    $jacques = new Car("Citroen", "Jacques", 30);


    $participants = [$jean, $paul, $jacques];

    $course = new Course($participants, 1000);

    $course->start();

    $course->showCourse();

    $course->avancer($jean, 10);
    $course->avancer($jacques, 20);

    $course->showCourse();

    $course->avancer($paul, 15);
    $course->avancer($jean, 1);
    $course->avancer($jacques, 2);

    $course->showCourse();

    $course->avancer($jean, 100);
    $course->avancer($paul, 15);
    $course->avancer($jacques, 200);

    $course->showCourse();

    $course->avancer($paul, 150);