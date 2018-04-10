<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application Workshop2
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
*/
class PdoWorkshop2
{
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=workshop2';   		
    private static $user='root' ;    		
    private static $mdp='' ;	
    private static $monPdo;
    private static $monPdoWorkshop2 = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoWorkshop2::$monPdo = new PDO(PdoWorkshop2::$serveur.';'.PdoWorkshop2::$bdd, PdoWorkshop2::$user, PdoWorkshop2::$mdp); 
			PdoWorkshop2::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoWorkshop2::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoWorkshop2 = PdoWorkshop2::getPdoWorkshop2();
 * @return l'unique objet de la classe PdoWorkshop2
 */
	public  static function getPdoWorkshop2()
	{
		if(PdoWorkshop2::$monPdoWorkshop2 == null)
		{
			PdoWorkshop2::$monPdoWorkshop2= new PdoWorkshop2();
		}
		return PdoWorkshop2::$monPdoWorkshop2;  
    }
    
    public function checkLogin($table, $login, $password) {
        $req = 'Select * from '.$table.' where login="'.$login.'" and password ="'.$password.'"';
        $res = PdoWorkshop2::$monPdo->query($req);
        $checkLogin = $res->fetch();
        var_dump("log " , $res, $checkLogin);
        if (empty($checkLogin)) {
            $rep = false;
        } else {
            $rep = true;
        }
		return $rep;
    }

}