<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application lafleur
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Patrice Grand
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoLigue
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=ligue';
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoLigue = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoLigue::$monPdo = new PDO(PdoLigue::$serveur.';'.PdoLigue::$bdd, PdoLigue::$user, PdoLigue::$mdp);
			PdoLigue::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoLigue::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoligue = PdoLigue::getPdoLigue();
 * @return l'unique objet de la classe PdoLigue
*/
	public  static function getPdoLigue()
	{
		if(PdoLigue::$monPdoLigue == null)
		{
			PdoLigue::$monPdoLigue= new PdoLigue();
		}
		return PdoLigue::$monPdoLigue;
	}

    /**
     * Retourne toutes les catégories sous forme d'un tableau associatif
     *
     * @return le tableau associatif des catégories
     */
    public function getLesClubs()
    {
        $req = "select * from clubs";
        $res = PdoLigue::$monPdo->query($req);
        $lesLignes = $res->fetchall();
        return $lesLignes;
    }
	
	public function getLeClub($idC)
	{
		$req = "select * from clubs where idClub='".$idC."'";
		$res = PdoLigue::$monPdo->query($req);
		$leClub = $res->fetchall();
		return $leClub;
	}
	
	public function UpdateClub($idC)
	{
		$req = "update clubs set idClub='".$idC." where idClub='".$idC."'";
		$res = PdoLigue::$monPdo->query($req);
		return $res;
	}



}
?>