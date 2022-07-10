<?php

class Animal{
    public function getanimalDetails(){
        $animalName = 'goat';
        $animalType = 'farm animal';
        $className = 'animals';
        return [
            'name' => $animalName,
            'type' => $animalType,
            'class' => $className
        ];
    }
}
?>