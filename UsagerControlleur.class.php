<?php
/**
 * Class UsagerControleur
 * Controleur de la ressource Usager
 * 
 * @author Equipe de 4
 * @version 1.1
 * @update 2019-11-11
 * @license MIT
 */

  
class UsagerControlleur 
{
	private $retour = array('data'=>array());

	/**
	 * Méthode qui gère les action en GET
	 * @param Requete $requete
	 * @return Mixed Données retournées
	 */
	public function getAction(Requete $requete)
	{
        if(isset($requete->url_elements[0])) // usager
        {
            switch($requete->url_elements[0]) 
            {
                case 'login':
                    $this->retour["data"] = $this->getListerUsager(); // Renvoie tous les utilisateurs de la base de données
                    break;
                case 'usager':
                    if (isset($requete->url_elements[1])) 
                    {
                        $id_usager = (int)$requete->url_elements[1];
                        $this->retour["data"] = $this->getUsager($id_usager);  
                    } else
                    {
                        $this->retour["data"] = $this->getListerUsager(); 
                    }
                    break;
                case 'cellier':
                    $id_usager = (int)$requete->url_elements[1];
                    $this->retour["data"] = $this->getCelliersParUsager($id_usager);
                    break;
                case 'ville':
                    $this->retour["data"] = $this->getListeVilles();
                    break;
                case 'bouteilles':
                    $id_usager = (int)$requete->url_elements[1];
                    $this->retour["data"] = $this->getBouteillesUsager($id_usager);
                    break;
                default:
                    $this->retour['erreur'] = $this->erreur(400);
                    unset($this->retour['data']);
                    break;
            }
        }
        else 
        {
            $this->retour['erreur'] = $this->erreur(400);
        }
        return $this->retour;		
    }
	
	/**
	 * Méthode qui gère les action en POST
	 * @param Requete $requete
	 * @return Mixed Données retournées
	 */
	public function postAction(Requete $requete)	// Modification
	{
		// if(!$this->valideAuthentification())
		// {
		// 	$this->retour['erreur'] = $this->erreur(401);
		// }
		// else {
			if(isset($requete->url_elements[0]) && ($requete->url_elements[0] === 'usager'))	// Action d'ajouter usager
			{

                if(isset($requete->url_elements[1]) && ($requete->url_elements[1] === 'modif'))
                {
                    
                    $this->retour["data"] = $this->modifUsager($requete->parametres);
                }
                else
                {
                    $this->retour['erreur'] = $this->erreur(400);
                    unset($this->retour['data']);
                }
			}
			else{
				$this->retour['erreur'] = $this->erreur(400);
				unset($this->retour['data']);
			}
		//}
	
		return $this->retour;
	}
	
	/**
	 * Méthode qui gère les action en PUT
	 * @param Requete $requete
	 * @return Mixed Données retournées
	 */
	public function putAction(Requete $requete)		//ajout
	{
        if(isset($requete->url_elements[0]))	// usager
		{
			switch($requete->url_elements[0]) 
			{
				case 'register':
                    $this->retour["data"] = $this->ajouterUnUsager($requete->parametres);
					break;
				default:
					$this->retour['erreur'] = $this->erreur(400);
					unset($this->retour['data']);
					break;
			}
		}
		return $this->retour;
	}
	
	/**
	 * Méthode qui gère les action en DELETE
	 * @param Requete $oReq
	 * @return Mixed Données retournées
	 */
	public function deleteAction(Requete $requete)
	{
		// if(!$this->valideAuthentification())
		// {
		// 	$this->retour['erreur'] = $this->erreur(401);
		// }
		// else{
			if(isset($requete->url_elements[0]) && is_numeric($requete->url_elements[0]))	// Normalement l'id de la biere 
			{
				$id = (int)$requete->url_elements[0];
				
				$this->retour["data"] = $this->effacerUsager($id);
			}
			else{
				$this->retour['erreur'] = $this->erreur(400);
				unset($this->retour['data']);
			}
		// }

		return $this->retour;
		
	}
	
	/**
	 * Retourne les informations de la bière $id_biere
	 * @param int $id_biere Identifiant de la bière
	 * @return Array Les informations de la bière
	 * @access private
	 */	
	private function getUsager($id)
	{   
		$res = Array();
		$oUsager = new Usager();
		$res = $oUsager->getUsager($id);
		return $res; 
	}

    /**
	 * Méthode qui retourne les bouteilles d'usager avec id_usager
     * @access public
     * @param int $id_usager
	 * @return Array Tableau de bouteilles retournée
	 */
    private function getBouteillesUsager($id_usager) 
    {
        $res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->getBouteillesUsager($id_usager);
		
		return $res; 
    }

    /**
	 * Retourne les informations de la bière $id_biere
	 * @param int $id_biere Identifiant de la bière
	 * @return Array Les informations de la bière
	 * @access private
	 */	
	private function getCelliersParUsager($id)
	{
		$res = Array();
		$oUsager = new Cellier();
		$res = $oUsager->getCelliersParUsager($id);
		return $res; 
	}

    /**
	 * Retourne les informations des bières de la db	 
	 * @return Array Les informations sur toutes les bières
	 * @access private
	 */	
	private function getListeUsager()
	{
		$res = Array();
		$oUsager = new Usager();
		$res = $oUsager->getListeUsager();
		return $res; 
	}
	
	/**
	 * Modifie les informations du profil
	 * @param Array Les informations d'usager'
	 * @return int $id_usager Identifiant d'usager
	 * @access private
	 */	
	private function modifUsager($data)
	{
		$res = Array();
		$oUsager = new Usager();
		$res = $oUsager->modifierUsager($data);
		return $res; 
	}
	
	/**
	 * Effacer la bière $id_biere
	 * @param int $id_biere Identifiant de la bière
	 * @return boolean Succès ou échec
	 * @access private
	 */	
	private function effacerUsager($id)
	{
		$res = Array();
		$orUsager = new Usager();
		$res = $orUsager->effacerUsager($id);
		return $res; 
	}

	/**
	 * Ajouter un usager 
	 * @param Array Les informations du usager
	 * @return int $id_usager Identifiant du nouvel usager
	 * @access private
	 */	
	private function ajouterUnUsager($data)
	{
        $res = Array();
		$oUsager = new Usager();
		$res = $oUsager->ajouterUsager($data);
		return $res; 
	}

    /**
	 * Retourne les informations de la usager $id_biere
	 * @param int $id_biere Identifiant de la usager
	 * @return Array Les informations de la usager
	 * @access private
	 */	
	private function getLogUser($data)
	{
		$res = Array();
		$oUsager = new Usager();
		$res = $oUsager->getLoginUser($data);
		return $res; 
	}

    /**
	 * Retourne les informations des utilisateurs de la db	 
	 * @return Array Les informations sur toutes les bières
	 * @access private
	 */	
	private function getListerUsager()
	{
		$res = Array();
		$oUsager = new Usager();
		$res = $oUsager->getListeUser();
		return $res; 
	}
	
	// /**
	//  * Valide les données d'authentification du service web
	//  * @return Boolean Si l'authentification est valide ou non
	//  * @access private
	//  */	
	// private function valideAuthentification()
    // {
    //   	$access = false;
	// 	$headers = apache_request_headers();
		
	// 	if(isset($headers['Authorization']) || isset($headers['authorization']))	//Fetch avec Chrome envoie authorization et non Authorization ! 
	// 	{
	// 		if(isset($_SERVER['PHP_AUTH_PW']) && isset($_SERVER['PHP_AUTH_USER']))
	// 		{
	// 			if($_SERVER['PHP_AUTH_PW'] == 'biero' && $_SERVER['PHP_AUTH_USER'] == 'biero')
	// 			{
	// 				$access = true;
	// 			}
	// 		}
	// 	}
    //   	return $access;
    // }

    /**
	 * Retourne les informations des villes	 
     * @access private
	 * @return Array Tableau de toutes les villes
	 */	
	private function getListeVilles()
	{
		$res = Array();
		$oUsager = new Usager();
		$res = $oUsager->getListeVilles();
		
		return $res; 
	}

	private function erreur($code, $data="")
	{
		//header('HTTP/1.1 400 Bad Request');
		http_response_code($code);

		return array("message"=>"Erreur de requete", "code"=>$code);
		
	}

}