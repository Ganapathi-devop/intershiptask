<?php

class Person{
    public function getpersonDetails(){
        $personName = 'person1';
        $personAge = '20';
        $className = 'person';
        return [
            'name' => $personName,
            'age' => $personAge,
            'class' => $className
        ];
    }
}
?>