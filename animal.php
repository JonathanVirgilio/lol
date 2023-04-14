<?php
class Animal{
    public function roar(){
        echo "El";
    }
}

class Gato extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." miaguea, MIAU!!";
    }
}

class Perro extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." ladra, wau!";
    }
}

class Vaca extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." le hace MUUUUUUUU!!";
    }
}

class Abecedario extends Animal{
    public $letras;
    public function __construct($letras)
    {
        $this->letras=$letras;
    }
    public function roar()
    {
        echo $this->letras."Iniciamos, a, b, c, d, e, f, g, h, i, j, k, l, m, n, ñ, o, p, q, r, s, t, u, v, w, x, y, z";
    }
}
function roarAnimal(Animal $animal){
    $animal->roar();
}

$gato = new Gato("gato");
$perro = new Perro("perro");
$vaca = new Vaca("vaca");
$abc = new Abecedario("abecedario ");
if (isset($_POST['gato'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($gato) ?>");
    window.speechSynthesis.speak(msg);
</script>
    <?php
}
else if (isset($_POST['perro'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($perro) ?>");
    window.speechSynthesis.speak(msg);
</script>
    <?php
}
else if (isset($_POST['vaca'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php RoarAnimal($vaca) ?>");
    window.speechSynthesis.speak(msg);
</script>
    <?php
}
else if(isset($_POST['abecedario'])) {
    ?>
   <script>
       var msg = new SpeechSynthesisUtterance("<?php roarAnimal($abc) ?>");
       window.speechSynthesis.speak(msg);
   </script>
   <?php
   }
?>