<?php
/**
 * Class Bouteille
 * Cette classe possède les fonctions de gestion des bouteilles dans le cellier et des bouteilles dans le catalogue complet.
 * 
 * @author Equipe de 4
 * @version 1.0
 * @update 2019-01-21
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class Admin extends Modele {

    /**
	 * Effacer un cellier
	 * @access public
	 * @param Array $id Identifiant du cellier  
	 * @return Boolean
	 */
	public function effacerBouteille($id_bouteille)
    {
		$resQuery = false;
		if(isset($id_bouteille))
		{
			$id_bouteille = $this->_db->real_escape_string($id_bouteille);

            $query = "SET foreign_key_checks = 0";
            $resQuery = $this->_db->query($query);

			$query = "DELETE from vino__cellier_bouteille where id_bouteille = ". $id_bouteille;
			$resQuery = $this->_db->query($query);

			$query = "DELETE from vino__bouteille where id = ". $id_bouteille;
			$resQuery = $this->_db->query($query);

            $query = "SET foreign_key_checks = 1";
            $resQuery = $this->_db->query($query);
		}
		return $resQuery;
	}
	

	
}

?>