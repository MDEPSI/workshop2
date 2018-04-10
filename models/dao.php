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
    
    /**login */
    public function checkLogin($table, $login, $password) {
        $req = 'Select * from '.$table.' where login="'.$login.'" and password ="'.$password.'"';
        $res = PdoWorkshop2::$monPdo->query($req);
        $checkLogin = $res->fetch();
        if (empty($checkLogin)) {
            $rep = false;
        } else {
            $rep = true;
        }
		return $rep;
    }
    /** */

    /**apprenants */
    public function getApprenants()
	{
		$req = "select * from apprenant";
		$res = PdoWorkshop2::$monPdo->query($req);
		$apprenants = $res->fetchAll();
		return $apprenants;
    }
    public function createApprenant($idEquipe, $nom, $prenom, $login, $password)
	{
		$req = "insert into apprenant (ID_EQUIPE, NOM, PRENOM, LOGIN, PASSWORD) values ('$idEquipe', '$nom', '$prenom','$login','$password')" ;
		$res = PdoWorkshop2::$monPdo->exec($req);

	}
    /** */

    /**intervenants */
    public function getIntervenants()
	{
		$req = "select * from intervenant";
		$res = PdoWorkshop2::$monPdo->query($req);
		$intervenants = $res->fetchAll();
		return $intervenants;
    }
    public function createIntervenant($nom, $prenom, $login, $password, $status)
	{
		$req = "insert into intervenant (NOM, PRENOM, LOGIN, PASSWORD, STATUS) values ('$nom', '$prenom','$login','$password', '$status')" ;
		$res = PdoWorkshop2::$monPdo->exec($req);

	}
    /** */

    /**responsables */
    public function getResponsables()
	{
		$req = "select * from responsable";
		$res = PdoWorkshop2::$monPdo->query($req);
		$responsables = $res->fetchAll();
		return $responsables;
    }
    /** */

    /**equipes */
    public function createEquipe($idProjet, $libelle, $nbJetons)
	{
		$req = "insert into equipe (ID_PROJET, LIBELLE,NBJETONS) values ('$idProjet', '$libelle','$nbJetons')" ;
		$res = PdoWorkshop2::$monPdo->exec($req);
    }
    public function updateEquipe($nbJetons, $id)
    {
        $req = "update equipe set NBJETONS = '".$nbJetons."' where id ='".$id."' ";
        $res = PdoWorkshop2::$monPdo->exec($req);
    }
    public function getEquipe($id)
	{
		$req = "select * from equipe where id='".$id."'";
		$res = PdoWorkshop2::$monPdo->query($req);
		$equipe = $res->fetch();
		return $equipe;
    }
    /** */

    /**projets */
    public function createProjet($idResponsable, $libelle, $nbJetons)
	{
		$req = "insert into projet (ID_RESPONSABLE, LIBELLE,NBJETONS) values ('$idResponsable', '$libelle','$nbJetons')" ;
		$res = PdoWorkshop2::$monPdo->exec($req);
    }
    public function getProjets()
	{
		$req = "select * from projet";
		$res = PdoWorkshop2::$monPdo->query($req);
		$projets = $res->fetchAll();
		return $projets;
    }
    // public function updateProjet($nbJetons, $id)
    // {
    //     $req = "update projet set NBJETONS = '".$nbJetons."' where id ='".$id."' ";
    //     $res = PdoWorkshop2::$monPdo->exec($req);
    // }
    /** */

    /**associations */
    public function assocProjetIntervenant($idProjet, $idIntervenant)
    {
        $req = "insert into projet_intervenant (ID, ID_1) values ('$idProjet', '$idIntervenant')";
        $res = PdoWorkshop2::$monPdo->exec($req);
    }

    // public function getApprenantsEquipeProjet($idProjet, $idEquipe)
    // {
    //     $req = "SELECT apprenant.nom, apprenant.prenom, projet.libelle, equipe.libelle 
    //             FROM apprenant 
    //             join equipe on apprenant.id_equipe=equipe.id
    //             join projet on equipe.id_projet=projet.id
    //             where id_projet='".$idProjet."' and id_equipe = '".$idEquipe."'";
    //     var_dump($req);
    //     $res = PdoWorkshop2::$monPdo->exec($req);
    //     var_dump($res);
        
    // }
    /** */
        
}