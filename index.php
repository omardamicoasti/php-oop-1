<!-- Creare una classe Movie

Dichiarare le proprietà

Dichiarare il costruttore

Dichiarare almeno un metodo

Fare degli esempi di utilizzo della classe istanziando almeno 
2 oggetti della stessa e stampando a schermo il valore delle proprietà -->

<?php
// creazione classe
class Movie {

    public  $originalTitle;
    public  $title;
    public  $year;
    public  $length;
    public  $genre;
    private $ageClassification = "0-99";

    // dichiarazione costruttore
    function __construct($originalTitle) {
        $this->originalTitle = $originalTitle;
    }

    // dichiarazione metodo
    public function setAgeClassification()
    {
        if ($this->genre == "erotic" || $this->genre == "violence" ) {
            $this->ageClassification = "+18";
        } elseif ($this->genre == "horror") {
            $this->ageClassification = "+14";
        } else if ($this->genre == "thriller" || $this->genre == "action"|| $this->genre == "drama") {
            $this->ageClassification = "+8";
        }
    }
    public function getAgeClassification()
    {
        return $this->ageClassification;
    }

}

// inserimento argomento costruttore primo film
$testMovie = new Movie("trainspotting2");
$testMovie-> title = "trainspotting 2";
$testMovie-> year = "2017";
$testMovie-> length = 117;
$testMovie-> genre = "drama";
// metodo
$testMovie-> setAgeClassification();
var_dump($testMovie);

// inserimento argomento costruttore secondo film
$testSecondMovie = new Movie("lock and stock");
$testSecondMovie->title = "pazzi scatenati";
$testSecondMovie->year = "1998";
$testSecondMovie->length = 107;
$testSecondMovie->genre = "thriller";
// metodo
$testSecondMovie->setAgeClassification();
var_dump($testSecondMovie);

// inserimento argomento costruttore terzo film
$testThirdMovie = new Movie("Giovannona Coscialunga disonorata con onore");
$testThirdMovie->title = "Giovannona Coscialunga disonorata con onore";
$testThirdMovie->year = "1973";
$testThirdMovie->length = 94;
$testThirdMovie->genre = "erotic";
// metodo
$testThirdMovie->setAgeClassification();
var_dump($testThirdMovie);