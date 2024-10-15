<?php

/**
 * Class representing a continent in the `lm_Continents` table.
 *
 * Questa classe include metodi per ottenere e impostare i dati del continente
 * e per interagire con un database. I metodi per le operazioni sul database
 * sono solo un esempio e non includono la connessione al database.
 *
 * @package     ContinentsModule
 * @subpackage  Entities
 */
class Continent
{
    /**
     * @var int ID del continente
     */
    private $id;

    /**
     * @var string Nome del continente
     */
    private $name;

    /**
     * @var int Popolazione del continente
     */
    private $population;

    /**
     * @var int Area del continente (in km²)
     */
    private $areaKm2;

    /**
     * @var string Descrizione del continente
     */
    private $description;

    /**
     * @var \DateTime Data di creazione del record
     */
    private $creationDate;

    /**
     * @var \DateTime Data dell'ultimo aggiornamento del record
     */
    private $updateDate;

    /**
     * Costruttore della classe Continent.
     *
     * @param int       $id           ID del continente
     * @param string    $name         Nome del continente
     * @param int       $population   Popolazione del continente
     * @param int       $areaKm2      Area del continente in km²
     * @param string    $description  Descrizione del continente
     * @param \DateTime $creationDate Data di creazione del record
     * @param \DateTime $updateDate   Data dell'ultimo aggiornamento del record
     */
    public function __construct($id, $name, $population, $areaKm2, $description, $creationDate, $updateDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->population = $population;
        $this->areaKm2 = $areaKm2;
        $this->description = $description;
        $this->creationDate = new \DateTime($creationDate);
        $this->updateDate = new \DateTime($updateDate);
    }

    /**
     * Ottiene l'ID del continente.
     *
     * @return int ID del continente
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Imposta l'ID del continente.
     *
     * @param int $id ID del continente
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Ottiene il nome del continente.
     *
     * @return string Nome del continente
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Imposta il nome del continente.
     *
     * @param string $name Nome del continente
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Ottiene la popolazione del continente.
     *
     * @return int Popolazione del continente
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Imposta la popolazione del continente.
     *
     * @param int $population Popolazione del continente
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    /**
     * Ottiene l'area del continente.
     *
     * @return int Area del continente in km²
     */
    public function getAreaKm2()
    {
        return $this->areaKm2;
    }

    /**
     * Imposta l'area del continente.
     *
     * @param int $areaKm2 Area del continente in km²
     */
    public function setAreaKm2($areaKm2)
    {
        $this->areaKm2 = $areaKm2;
    }

    /**
     * Ottiene la descrizione del continente.
     *
     * @return string Descrizione del continente
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Imposta la descrizione del continente.
     *
     * @param string $description Descrizione del continente
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Ottiene la data di creazione del record.
     *
     * @return \DateTime Data di creazione del record
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Imposta la data di creazione del record.
     *
     * @param \DateTime $creationDate Data di creazione del record
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * Ottiene la data dell'ultimo aggiornamento del record.
     *
     * @return \DateTime Data dell'ultimo aggiornamento del record
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Imposta la data dell'ultimo aggiornamento del record.
     *
     * @param \DateTime $updateDate Data dell'ultimo aggiornamento del record
     */
    public function setUpdateDate(\DateTime $updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * Restituisce una rappresentazione stringa dell'oggetto Continent.
     *
     * @return string Rappresentazione stringa dell'oggetto Continent
     */
    public function __toString()
    {
        return sprintf(
            "Continent [ID=%d, Name=%s, Population=%d, Area=%d km², Description=%s, CreationDate=%s, UpdateDate=%s]",
            $this->id,
            $this->name,
            $this->population,
            $this->areaKm2,
            $this->description,
            $this->creationDate->format('Y-m-d H:i:s'),
            $this->updateDate->format('Y-m-d H:i:s')
        );
    }
}