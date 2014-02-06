<?php

namespace DeclareNounou\GestNounouBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nounou
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DeclareNounou\GestNounouBundle\Entity\NounouRepository")
 */
class Nounou
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="DeclareNounou\GestNounouBundle\Entity\Contrat", mappedBy="nounou")
     */
    private $contrats;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="datenaissance", type="date")
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="codepostal", type="integer")
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Nounou
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Nounou
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param string $datenaissance
     * @return Nounou
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    
        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return string 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Nounou
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Nounou
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    
        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Nounou
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    /**
     * Méthode retournant une chaîne de caractères
     * constituée du nom et du prénom
     * @return type
     */
    public function __toString() {
        return $this->getNom().' '.$this->getPrenom();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contrats
     *
     * @param \DeclareNounou\GestNounouBundle\Entity\Contrat $contrats
     * @return Nounou
     */
    public function addContrat(\DeclareNounou\GestNounouBundle\Entity\Contrat $contrats)
    {
        $this->contrats[] = $contrats;

        return $this;
    }

    /**
     * Remove contrats
     *
     * @param \DeclareNounou\GestNounouBundle\Entity\Contrat $contrats
     */
    public function removeContrat(\DeclareNounou\GestNounouBundle\Entity\Contrat $contrats)
    {
        $this->contrats->removeElement($contrats);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContrats()
    {
        return $this->contrats;
    }
}
