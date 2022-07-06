<?php
/**
 * Class BouteilleControleur
 * Controleur de la ressource Bouteille
 * 
 * @author Equipe de 4
 * @version 1.1
 * @update 2019-11-11
 * @license MIT
 */

  
class AdminControlleur 
{
	private $retour = array('data'=>array());
	
	/**
	 * Méthode qui gère les action en DELETE
     * @access public
	 * @param Requete $oReq
	 * @return Mixed Données retournées
	 */
	public function deleteAction(Requete $requete)
	{
        if(isset($requete->url_elements[0]) && !is_numeric($requete->url_elements[0]))	// la bouteille
        {
            $bouteille = (int)$requete->url_elements[0];
            if(isset($requete->url_elements[1]) && is_numeric($requete->url_elements[1]))	// l'id de la bouteille 
            {
                $id_bouteille = (int)$requete->url_elements[1];
                
                if(isset($requete->url_elements[2])) 
                {
                    switch($requete->url_elements[2]) 
                    {
                        case 'suppression':
                            $this->retour["data"] = $this->effacerBouteille($id_bouteille);
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
                    unset($this->retour['data']);
                }
            } 
        }
        return $this->retour;
	}

        /**
	 * Effacer le cellier $id_cellier
	 * @param int $id_cellier Identifiant du cellier
	 * @return boolean Succès ou échec
	 * @access private
	 */	
	private function effacerBouteille($id_bouteille)
	{
		$res = Array();
		$oAdmin = new Admin();
		
		$res = $oAdmin->effacerBouteille($id_bouteille);
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
