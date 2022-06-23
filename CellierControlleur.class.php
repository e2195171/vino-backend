<?php
/**
 * Class CellierControleur
 * Controleur de la ressource Cellier
 * 
 * @author Equipe de 4
 * @version 1.1
 * @update 2022-06-18
 * @license MIT
 */

  
class CellierControlleur 
{
	private $retour = array('data'=>array());

	/**
	 * Méthode qui gère les action en GET
     * @access public
	 * @param Requete $requete
	 * @return Mixed Données retournées
	 */
	public function getAction(Requete $requete)
	{
        // cellier
        if(isset($requete->url_elements[0]) && !is_numeric($requete->url_elements[0]))
        {   
            switch($requete->url_elements[0]) 
                {                    
                    case 'cellier':
                        if(isset($requete->url_elements[1]) && is_numeric($requete->url_elements[1]))
                        {
                            $id_cellier = (int)$requete->url_elements[1];
                            if(isset($requete->url_elements[2]) && is_numeric($requete->url_elements[2]))
                            {
                                $id_usager = (int)$requete->url_elements[2];
                                $this->retour["data"] = $this->getBouteillesDansCeCellier($id_cellier, $id_usager);
                                break;
                            }
                            else
                            {
                                $this->retour['erreur'] = $this->erreur(400);
                                unset($this->retour['data']);
                            }
                        }
                        else
                        {
                            $this->retour['erreur'] = $this->erreur(400);
                            unset($this->retour['data']);
                        }
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
	 * Méthode qui gère les action en PUT
     * @access public
	 * @param Requete $requete
	 * @return Mixed Données retournées
	 */
	//public function putAction(Requete $requete)		// Modification
    public function putAction(Requete $requete)		// Modification
	{   
        /** id_usager par default */
            $id_usager = 1; //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        // cellier
        if(isset($requete->url_elements[0]) && ($requete->url_elements[0] === 'cellier'))
        {   
            if(isset($requete->url_elements[1]) && is_numeric($requete->url_elements[1])) // id_cellier
            {
                $id_cellier = (int)$requete->url_elements[1];
                if(isset($requete->url_elements[2]) && is_numeric($requete->url_elements[2])) // id_bouteille
                {
                    $id_bouteille = (int)$requete->url_elements[2];
                    if(isset($requete->url_elements[3]) && is_numeric($requete->url_elements[3])) // id_achats
                    {
                        $id_achats = (int)$requete->url_elements[3];
                        if(isset($requete->url_elements[4]) && $requete->url_elements[4] === 'quantite')
                        {
                            $this->retour["data"] = $this->ajouterQuantiteBouteille($id_cellier, $id_bouteille, $id_achats, $id_usager);
                            
                        }
                        else
                        {
                            $this->retour['erreur'] = $this->erreur(400);
                            unset($this->retour['data']);
                        } 
                    }
                    else
                    {
                        $this->retour['erreur'] = $this->erreur(400);
                        unset($this->retour['data']);
                    }
                }
                else if(isset($requete->url_elements[2]) && $requete->url_elements[2] === 'ajout')
                {
                    $this->retour["data"] = $this->ajouterUneBouteille($requete->parametres, $id_usager);     

                }
            }
            else if(isset($requete->url_elements[1]) && ($requete->url_elements[1] === 'ajout'))
            {
                $this->retour["data"] = $this->ajouterUnCellier($requete->parametres);                    
            }
            else
            {
                $this->retour['erreur'] = $this->erreur(400);
            }
        }
        else
        {
            //$this->retour["data"] = $this->ajouterUneBouteille($requete->parametres, $id_usager);
            $this->retour['erreur'] = $this->erreur(400);
        }
        return $this->retour;	
	}

/**
	 * Méthode qui gère les action en POST
     * @access public
	 * @param Requete $requete
	 * @return Mixed Données retournées
	 */
	public function postAction(Requete $requete)	// Modification
	{
        if(isset($requete->url_elements[0]) && $requete->url_elements[0] === 'cellier')	// cellier 
        {
            if(isset($requete->url_elements[1]) && is_numeric($requete->url_elements[1]))	// l'id de cellier
            {
                if(isset($requete->url_elements[2]) && $requete->url_elements[2] === 'modif')	// l'id de cellier
                {
                    $this->retour["data"] = $this->modifCellier($requete->parametres);
                }
                else
                {
                    $this->retour['erreur'] = $this->erreur(400);
                    unset($this->retour['data']);
                }
            }
            else
            {
                $this->retour['erreur'] = $this->erreur(400);
                unset($this->retour['data']);
            }
        }
        else
        {
            $this->retour['erreur'] = $this->erreur(400);
            unset($this->retour['data']);
        }
        return $this->retour;
	}

    /**
	 * Méthode qui gère les action en DELETE
     * @access public
	 * @param Requete $oReq
	 * @return Mixed Données retournées
	 */
	public function deleteAction(Requete $requete)
	{
        // cellier
        if(isset($requete->url_elements[0]) && !is_numeric($requete->url_elements[0]))
        {   
            /** id_usager par default */
            $id_usager = 1; //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            switch($requete->url_elements[0]) 
            {                    
                case 'cellier':
                    if(isset($requete->url_elements[1]) && is_numeric($requete->url_elements[1])) // id_cellier
                    {
                        $id_cellier = (int)$requete->url_elements[1];
                        if(isset($requete->url_elements[2]) && is_numeric($requete->url_elements[2])) // id_bouteille
                        {
                            $id_bouteille = (int)$requete->url_elements[2];
                            if(isset($requete->url_elements[3]) && $requete->url_elements[3] === 'suppression')
                            {
                            $this->retour["data"] = $this->effacerBouteille($id_cellier, $id_bouteille);
                            break;
                            }
                            if(isset($requete->url_elements[3]) && is_numeric($requete->url_elements[3])) // id_achats
                            {
                                $id_achats = (int)$requete->url_elements[3];
                                if(isset($requete->url_elements[4]) && $requete->url_elements[4] === 'quantite')
                                {
                                    $this->retour["data"] = $this->boireQuantiteBouteille($id_cellier, $id_bouteille, $id_achats, $id_usager);
                                    break;
                                }
                                else
                                {
                                    $this->retour['erreur'] = $this->erreur(401);
                                    unset($this->retour['data']);
                                } 
                            }
                            else
                            {
                                $this->retour['erreur'] = $this->erreur(402);
                                unset($this->retour['data']);
                            }
                        }
                        else if(isset($requete->url_elements[2]) && $requete->url_elements[2] === 'suppression')
                        {

                            $this->retour["data"] = $this->effacerCellier($id_cellier);
                            break;
                        }
                        else
                        {
                            $this->retour['erreur'] = $this->erreur(404);
                            unset($this->retour['data']);
                        }
                    }
                    else
                    {
                        $this->retour['erreur'] = $this->erreur(404);
                        unset($this->retour['data']);
                    }
                default:
                    $this->retour['erreur'] = $this->erreur(405);
                    unset($this->retour['data']);
                    break;
            }                
        } 
        else
        {
            $this->retour['erreur'] = $this->erreur(406);
        }
        return $this->retour;	
	}

	/**
	 * Méthode qui retourne les bouteilles dans le cellier avec id_cellier et id_usager
     * @access public
	 * @param int $id_cellier du cellier
     * @param int $id_bouteille du cellier
	 * @return Array Tableau d'information sur la bouteille retournée
	 */
    private function getBouteillesDansCeCellier($id_cellier, $id_usager) 
    {
        $res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->getBouteillesDansCeCellier($id_cellier, $id_usager);
		
		return $res; 
    }

    /** Fonctions pour les actions PUT */

    /**
	 * Ajouter une bouteille au cellier
	 * @access private
	 * @param Array Les informations de la bouteille
	 * @return int $id_bouteille Identifiant de la nouvelle bouteille
	 */	
	private function ajouterUnCellier($data)
	{
		$res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->ajouterCellier($data);
		return $res; 
	}

    /**
	 * Ajouter une bouteille au cellier
	 * @access private
	 * @param Array Les informations de la bouteille
	 * @return int $id_bouteille Identifiant de la nouvelle bouteille
	 */	
	private function ajouterUneBouteille($data, $id_usager)
	{
		$res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->ajouterBouteilleCellier($data, $id_usager);
		return $res; 
	}

    /**
	 * Effacer la bouteille $id_bouteille
	 * @param int $id_bouteille Identifiant de la bouteille
	 * @return boolean Succès ou échec
	 * @access private
	 */	
	private function effacerBouteille($id_cellier, $id_bouteille)
	{
		$res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->effacerBouteille($id_cellier, $id_bouteille);
		return $res; 
	}

    /**
	 * Modifie les informations de la bouteille
	 * @access private
	 * @param Array Les informations de la bouteille
	 * @return int $data Identifiant de la bouteille dans le cellier à modifier
	 */	
	private function modifBouteille($data)
	{
		$res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->modifBouteille($data);
		return $res; 
	}//ici

    /**
	 * Effacer le cellier
	 * @param int $id_cellier Identifiant de cellier
	 * @return boolean Succès ou échec
	 * @access private
	 */	
	private function effacerCellier($id_cellier)
	{
		$res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->effacerCellier($id_cellier);
		return $res; 
	}

    /**
	 * Méthode qui augmente de 1 le nombre de bouteilles avec $id au cellier
     * @access public
	 * @param int $id de la bouteille
	 * @return Array Tableau des bouteilles retournée
	 */
	public function ajouterQuantiteBouteille($id_cellier, $id_bouteille, $id_achats, $id_usager)
    {
        $oCellier = new Cellier();
	    $oCellier->modifierQuantiteBouteilleCellier($id_cellier, $id_bouteille, $id_achats, $id_usager, 1);
        
        return $this->getBouteillesDansCeCellier($id_cellier, $id_usager);
    }

    /** Fonctions pour les actions  DELETE */
    /**
	 * Méthode qui réduit de 1 le nombre de bouteilles avec $id au cellier 
     * @access public
	 * @param int $id de la bouteille
	 * @return Array Tableau des bouteilles retournée
	 */
	public function boireQuantiteBouteille($id_cellier, $id_bouteille, $id_achats, $id_usager)
    {
		$oCellier = new Cellier;
		$oCellier->modifierQuantiteBouteilleCellier($id_cellier, $id_bouteille, $id_achats, $id_usager, -1);
		
		return $this->getBouteillesDansCeCellier($id_cellier, $id_usager);
	}

    /**
	 * Modifie les informations du cellier
	 * @access private
	 * @param Array Les informations de la bouteille
	 * @return int $id Identifiant de la bouteille dans le cellier à modifier
	 */	
	private function modifCellier($data)
	{
		$res = Array();
		$oCellier = new Cellier();
		$res = $oCellier->modifCellier($data);
		return $res; 
	}
    	
    /**
	 * Afficher des erreurs
	 * @access private
	 * @param String Le code d'erreur
	 * @return Array Les message d'erreurs
	 */	
	private function erreur($code, $data="")
	{
		//header('HTTP/1.1 400 Bad Request');
		http_response_code($code);

		return array("message"=>"Erreur de requete", "code"=>$code);
	}

}
