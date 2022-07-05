<?php
/**
 * Class SaqControleur
 * Controleur de la ressource Saq
 * 
 * @author Equipe de 4
 * @version 1.1
 * @update 2019-11-11
 * @license MIT
 */

  
class SaqControlleur 
{
	private $retour = array('data'=>array());

	/**
	 * Méthode qui gère les action en PUT
     * @access public
	 * @param Requete $requete
	 * @return Mixed Données retournées
	 */
	public function putAction(Requete $requete)		// Ajout
	{
        switch($requete->url_elements[0]) 
        {
            case 'update':
                $this->retour["data"] = $this->updateSAQ($requete->parametres);
                break;
            default:
                $this->retour['erreur'] = $this->erreur(400);
                unset($this->retour['data']);
                break;
        }
	}

    /**
	 * Importer des bouteilles de SAQ
	 * @access private
	 * @param Array Les informations
	 * @return Array Les bouteilles ajoutées
	 */	
    private function updateSAQ($data)
    {
        $res = Array();
		$oSAQ = new SAQ();
		$res = $oSAQ->getProduits($data);
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
