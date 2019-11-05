<?php
require_once("Building.php");
?>
<?php
class Tower extends Building {
    //attribute zokusei
    private $builtYear;
    
    //construction
    function __construct($name, $height, $builtYear){
        parent::__construct($name, $height);
        $this->builtYear = $builtYear;
    }
    
    //access method
    function setBuiltYear($year){
        $this->builtYear = $year;
    }
    function getBuiltYear() {
        return $this->builtYear;
    }
    //method
    function getProfile(){
        $profile = "{$this->name}  {$this->height} m, {$this->builtYear} tahun dibangun.";
        return $profile;
    }
}
?>