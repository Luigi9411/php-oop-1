<? 
class Movie {
   public $title;
   public $date;
   public $actor;
   public $typology;
   public $age;
   public $adult = 18;

   public function __construct($title,$date,$actor,$typology,)
   {
    $this->title = $title;
    $this->date = $date;
    $this->actor = $actor;
    $this->typology = $typology;
   }
} 

$spiderman = new Movie('Spiderman', '15-12-2020','Pitter','action');
$ghost = new Movie('Ghost', '13-12-1998','Maria','romantic');

echo $spiderman;
echo '<br>';
echo $ghost;

?>