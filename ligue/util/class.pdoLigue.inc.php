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
		$req = "SELECT * FROM clubs where idClub='".$idC."';";
		$res = PdoLigue::$monPdo->query($req);
		$leClub = $res->fetchall();
		return $leClub;
	}
	
	public function UpdateClub($idC,$nomC,$villeC,$telC)
	{
		$req = "UPDATE clubs SET nomClub='".$nomC."',villeClub='".$villeC."',telClub='".$telC."' WHERE idClub='".$idC."';";
        $res = PdoLigue::$monPdo->query($req);
        return $res;

	}

    public function SupLeClub($idClub)
    {
        $req="DELETE FROM clubs WHERE idClub='".$idClub."';";
        $res = PdoLigue::$monPdo->query($req);

    }

    public static function Ajouter_Club($nom,$ville,$tel)
    {
        $req = "INSERT INTO clubs (idClub, nomClub, villeClub, telClub) VALUES ('','".$nom."','".$ville."','".$tel."');";
        PdoLigue::$monPdo->query($req);

    }





    public function UpdateJoueur($idJ,$idC,$idCateg,$nomJ,$prenomJ,$villeJ,$telJ)
    {
        $req = "UPDATE joueurs SET idClub='".$idC."',idCateg='".$idCateg."',nomJoueur='".$nomJ."',prenomJoueur='".$prenomJ."',villeJoueur='".$villeJ."',telJoueur='".$telJ."' WHERE idJoueur='".$idJ."';";
        $res = PdoLigue::$monPdo->query($req);
        return $res;

    }

    // Cette fonction va chercher les infos sur les joueurs dans la base de donnée, et stoque ce que la base de donnée renvoit dans un tableau
    public function getLesJoueurs()
    {
        $req="SELECT * FROM joueurs,categorie,clubs WHERE joueurs.idCateg=categorie.idCateg AND joueurs.idClub=clubs.idClub ORDER BY joueurs.nomJoueur";
        $res = PdoLigue::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;

    }

    public function getLeJoueur($idJ)
    {
        $req = "SELECT * FROM joueurs where idJoueur='".$idJ."';";
        $res = PdoLigue::$monPdo->query($req);
        $unJoueur = $res->fetchall();
        return $unJoueur;

    }

    public static function SupLeJoueur($id)
    {
        $req="DELETE FROM JOUEUR WHERE idJoueur='".$id."';";
        $res = PdoLigue::$monPdo->query($req);

    }

    public static function Ajouter_Joueur($prenom,$nom,$ville,$tel)
    {
        $req = "INSERT INTO joueurs (idJoueur, idClub, nomJoueur, prenomJoueur, villeJoueur, telClub) VALUES ('', '', '".$nom."','".$prenom."','".$ville."','".$tel."');";
        echo var_dump($_REQUEST);
        PdoLigue::$monPdo->query($req);

    }






    public function se_connecter($idM,$mdpM)
    {
        $req="SELECT login,mdp FROM membres where idMembre='".$idM."';";
        //if($idM == $req[0] && $mdpM == $req[1])
        
    }


}
?>