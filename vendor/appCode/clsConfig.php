<?PHP
class clsConfig
{
       public $BD_HOST;     
       public $BD_USER = array("akconcep_SD"); 
       public $BD_PWS;  
       public $BD_DB;
	   public $DEPURAR; 
	   
	  public function __construct()
	  {
		$this->BD_HOST = "67.227.144.192";   
		$this->BD_PWS ="47O;3BED]2kH";    
		$this->BD_DB ="akconcep_SistemasDistribuidos";
		$this->DEPURAR = false; // false
	  }	
}
?>