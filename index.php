<!-- Creare una classe Movie

Dichiarare le proprietà

Dichiarare il costruttore

Dichiarare almeno un metodo

Fare degli esempi di utilizzo della classe istanziando almeno 
2 oggetti della stessa e stampando a schermo il valore delle proprietà -->

<?php

class Movie {

    public $title;
    public $originalTitle;
    public $year;
    public $length;
    public $genre;
    public $ageClassification = "";

    
    public function getAgeClassification()
    {
        return $this->ageClassification;
    }

}


$testMovie = new Movie();

$testMovie-> title = "trainspotting 2";
$testMovie-> originalTitle = "trainspotting 2";
$testMovie-> year = "2017";
$testMovie-> length = 117;
$testMovie-> genre = "drama";



var_dump($testMovie);