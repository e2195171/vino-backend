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
class Bouteille extends Modele {

    /**
	 * Cette méthode annonce une liste des bouteilles importées de la SAQ disponibles pour ajouter au cellier
	 * @access public
	 * @return Array $data Tableau des données représentants la liste des bouteilles.
	 */
	public function getBouteillesInserer()
	{
		$rows = Array();
		$requete ='SELECT 
                    b.id as id_bouteille,
                    b.nom, 
                    b.image, 
                    b.code_saq,
                    b.id_type, 
                    b.id_pays,
                    t.type,
                    p.nom as pays
                    FROM vino__bouteille AS b
                    INNER JOIN vino__type AS t ON b.id_type = t.id
                    INNER JOIN vino__pays AS p ON b.id_pays = p.id
                    ;'; 
		if(($res = $this->_db->query($requete)) ==	 true)
		{
			if($res->num_rows)
			{
				while($row = $res->fetch_assoc())
				{
					//$row['nom'] = trim(utf8_encode($row['nom']));
					$rows[] = $row;
				}
			}
		}
		else 
		{
			throw new Exception("Erreur de requête sur la base de donnée", 1);
			//$this->_db->error;
		}
		return $rows;
	}

    /**
	 * Cette méthode annonce une liste des bouteilles importées de la SAQ disponibles pour ajouter au cellier.
	 * @access public
	 * @return Array $data Tableau des données représentants la liste des bouteilles.
	 */
	public function getListeBouteilleCellier()
	{
		$rows = Array();
        $requete ='SELECT 
                    cb.id_cellier,
                    cb.id_bouteille, 
                    cb.id_achats, 
                    cb.quantite,
                    cb.prix, 
                    cb.millesime, 
                    cb.garde_jusqua,
                    c.nom, 
                    c.adresse as cellier_adresse,
                    c.id_usager,
                    b.id as bouteille_id_bouteille,
                    b.nom, 
                    b.image, 
                    b.code_saq,
                    b.description,
                    b.prix_saq,
                    b.url_saq,
                    b.url_img,
                    b.format, 
                    b.id_type, 
                    b.id_pays,
                    t.type,
                    u.id as usager_id_usager,
                    u.nom as usager_nom,
                    u.courriel,
                    u.phone,
                    u.adresse as usager_adresse,
                    p.nom as pays
                    from vino__cellier_bouteille cb
                    INNER JOIN vino__cellier c ON cb.id_cellier = c.id
                    INNER JOIN vino__bouteille b ON cb.id_bouteille = b.id
                    INNER JOIN vino__type t ON b.id_type = t.id
                    INNER JOIN vino__usager u ON c.id_usager = u.id
                    INNER JOIN vino__pays p ON b.id_pays = p.id
                    '; 

		if(($res = $this->_db->query($requete)) ==	 true)
		{
			if($res->num_rows)
			{
				while($row = $res->fetch_assoc())
				{
					//$row['nom'] = trim(utf8_encode($row['nom']));
					$rows[] = $row;
				}
			}
		}
		else 
		{
			throw new Exception("Erreur de requête sur la base de donnée", 1);
			//$this->_db->error;
		}
		return $rows;
	}
	
	/**
	 * Cette méthode permet de retourner les résultats de recherche pour la fonction d'autocomplete de l'ajout des bouteilles dans le cellier
	 * @access public
	 * @param string $nom La chaine de caractère à rechercher
	 * @param int $nb_resultat Le nombre de résultat maximal à retourner.
	 * @throws Exception Erreur de requête sur la base de données 
	 * @return array id et nom de la bouteille trouvée dans le catalogue
	 */
    public function autocomplete($nom, $nb_resultat=10)
	{
		$rows = Array();
		$nom = $this->_db->real_escape_string($nom);
		$nom = preg_replace("/\*/","%" , $nom);

		$requete ='SELECT id, nom FROM vino__bouteille where LOWER(nom) like LOWER("%'. $nom .'%") LIMIT 0,'. $nb_resultat; 
		
        if(($res = $this->_db->query($requete)) ==	 true)
		{
			if($res->num_rows)
			{
				while($row = $res->fetch_assoc())
				{
					//$row['nom'] = trim(utf8_encode($row['nom']));
					$rows[] = $row;
				}
			}
		}
		else 
		{
			throw new Exception("Erreur de requête sur la base de données", 1);
			 
		}
		return $rows;
	}
	
	
	/**
	 * Cette méthode ajoute une ou des bouteilles au cellier
	 * @access public
	 * @param Array $data Tableau des données représentants la bouteille
	 * @return int Renvoie l'id de la bouteille ajoutée
	 */
	// public function ajouterBouteilleCellier($data)
	// {
    //     if (is_array($data) || is_object($data)) 
    //     {    
    //         if(extract($data) > 0)
    //         {
    //             $requete = "INSERT INTO vino__cellier(`id_bouteille`, `date_achat`, `garde_jusqua`, `notes`, `prix`, `quantite`, `millesime`) VALUES ('".$id_bouteille. "','". $date_achat. "','". $garde_jusqua. "','".$notes."','". $prix."','". $quantite."','". $millesime."')";

    //             $this->_db->query($requete);
    //         }
    //         return ($this->_db->insert_id ? $this->_db->insert_id : $requete);
    //     } else {
    //         echo "Une erreur s'est produite.";
    //     }
	// }

	/**
	 * Cette méthode ajoute une ou des bouteilles au cellier
	 * @access public
	 * @param Array $data Tableau des données représentants la bouteille
	 * @return int Renvoie l'id de la bouteille ajoutée
	 */
	public function ajouterBouteilleNonListees($data)
	{
        if (is_array($data) || is_object($data)) 
        {    
            if(extract($data) > 0)
            {
				$requete = "INSERT INTO vino__bouteille(`nom`, `image`, `url_saq`, `format`, `id_type`, `id_pays`) 
				VALUES ('".$nom. "','../../assets/img/bouteille.jpg','../../assets/img/bouteille.jpg','". $format."','". $id_type."','". $id_pays."')";
                $this->_db->query($requete);
				
            }
            return ($this->_db->insert_id ? $this->_db->insert_id : $requete);
				
        } else {
            echo "Une erreur s'est produite.";
        }
	}

    /**
	 * Cette méthode modifie le nombre de bouteilles au cellier
	 * @access public
	 * @param int $id L'id de la bouteille
	 * @param int $nombre Un identifiant qui permet de déterminer l'action - augmenter la quantité de 1 ou diminuer de 1 
	 * @return Boolean Succès ou échec de l'ajout.
	 */
	public function modifierQuantiteBouteilleCellier($id, $nombre) //$id_cellier??? et $id_bouteille
	{
		$qte = $this->getQuantite($id);	
		if($qte >= 0 && $nombre == -1){
			$requete = "UPDATE vino__cellier SET quantite = GREATEST(quantite + ". $nombre. ", 0) WHERE id = ". $id .";";
			$res = $this->_db->query($requete);
			return $res;

		} else if($qte >= 0 && $nombre == 1){
			$requete = "UPDATE vino__cellier SET quantite = GREATEST(quantite + ". $nombre. ", 0) WHERE id = ". $id .";";
			$res = $this->_db->query($requete);
			return $res;
		}
		return 0;
	}

    /**
	 * Cette méthode Obtient le nombre de bouteilles avec l'id au cellier
	 * @access public
	 * @param int $id L'id de la bouteille.
	 * @return Number Le quantité de bouteilles.
	 */
	public function getQuantite($id){
		$requete = "SELECT quantite FROM vino__celiier WHERE id = ". $id .";";
        return $this->_db->query($requete);
	}

    /**
	 * Cette méthode modifie la bouteille
	 * @access public
	 * @param Array $param Paramètres et valeur à modifier 
	 * @return int id de la bouteille ou 0 en cas d'échec
	 */
	public function modifBouteille($param)	
	{
		$aSet = Array();
		$resQuery = false;
        $id = $param['id'];
        if (is_array($param) || is_object($param)) {
            foreach ($param as $cle => $valeur) {
                $aSet[] = ($cle . "= '".$valeur. "'");
            }
            if(count($aSet) > 0)
            {
                $query = "Update vino__cellier SET ";
                $query .= join(", ", $aSet);
                $query .= (" WHERE id = ". $id); 
                $resQuery = $this->_db->query($query);
            }
            return ($resQuery ? $id : 0);
        } else {
            echo "Une erreur s'est produite.";
        }
	}

	/**
	 * Cette méthode annonce une liste des types
	 * @access public
	 * @return Array $data Tableau des types
	 */
	public function getListeTypes()
	{
		$rows = Array();
		$res = $this->_db->query('Select * from vino__type');
		if($res->num_rows)
		{
			while($row = $res->fetch_assoc())
			{
				$rows[] = $row;
			}
		}
		return $rows;
	}

	/**
	 * Cette méthode annonce une liste du pays
	 * @access public
	 * @return Array $data Tableau du pays
	 */
	public function getListePays()
	{
		$rows = Array();
		$res = $this->_db->query('Select * from vino__pays');
		if($res->num_rows)
		{
			while($row = $res->fetch_assoc())
			{
				$rows[] = $row;
			}
		}
		return $rows;
	}
}

?>