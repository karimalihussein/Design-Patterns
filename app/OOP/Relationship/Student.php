<?php

namespace App\OOP\Relationship;


class Student

{
    private string $name;
    private string $homeWork;
    private int $homeWorkScore = 30;

    public function __construct(string $name, string $homeWork = 'Write your name on board')
    {
        $this->name = $name;
        $this->homeWork = $homeWork;
    }
    
    public function assignATempTeacher(Teacher $teacher){
       
        $this->homeWork = $teacher->assignAHomeWork();

    }

    public function getHomeWorkScore()
    {
        return $this->homeWorkScore;
    }

    public function doHomeWork()
    {
        $this->homeWorkScore = rand(0, 100);
    }
}