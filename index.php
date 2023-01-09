<? 
class Movie {
   public $title;
   public $actor;
   public $typology;
   public $year;

   public function __construct($title,$actor,$typology,$year)
   {
    $this->title = $title;
    $this->actor = $actor;
    $this->typology = $typology;
    $this->year = $year;
   }

   public function setEta($year) {
    if (is_integer($year) && $year >= 0) {
        $this->year = $year;
    }
    return $year;
}

public function getYear() {
    return $this->year;
}

} 

$spiderman = new Movie('Spiderman','Tobey Maguire, ','action',2002);
$ghost = new Movie('Ghost','Patrick Swayze','romantic',1990);


var_dump($spiderman);
var_dump($ghost);
?>


