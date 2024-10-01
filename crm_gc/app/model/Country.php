<?php declare(strict_types=1);

class Country
{
    private $id;
    private $name;
    private $continentId;
    private $creationDate;
    private $updateDate;

    /**
     * Country constructor.
     * @param int|null $id
     * @param string $name
     * @param int $continentId
     * @param string|null $creationDate
     * @param string|null $updateDate
     */
    public function __construct($id = null, $name, $continentId, $creationDate = null, $updateDate = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->continentId = $continentId;
        $this->creationDate = $creationDate;
        $this->updateDate = $updateDate;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getContinentId()
    {
        return $this->continentId;
    }

    /**
     * @param int $continentId
     */
    public function setContinentId($continentId)
    {
        $this->continentId = $continentId;
    }

    /**
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param string|null $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return string|null
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param string|null $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            "Country [ID: %s, Name: %s, Continent ID: %s, Creation Date: %s, Update Date: %s]",
            $this->id,
            $this->name,
            $this->continentId,
            $this->creationDate,
            $this->updateDate
        );
    }
}
