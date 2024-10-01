<?php declare(strict_types=1);

    class IndustrySector
    {
        private $id;
        private $name;
        private $creationDate;
        private $updateDate;

        // Costruttore
        public function __construct($id = -1, $name = '', $creationDate = null, $updateDate = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->creationDate = $creationDate ?? date('Y-m-d H:i:s');
            $this->updateDate = $updateDate ?? date('Y-m-d H:i:s');
        }

        // Getter e Setter
        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getCreationDate()
        {
            return $this->creationDate;
        }

        public function setCreationDate($creationDate)
        {
            $this->creationDate = $creationDate;
        }

        public function getUpdateDate()
        {
            return $this->updateDate;
        }

        public function setUpdateDate($updateDate)
        {
            $this->updateDate = $updateDate;
        }

        // Metodo __toString
        public function __toString()
        {
            return "IndustrySector [ID: $this->id, Name: $this->name, Creation Date: $this->creationDate, Update Date: $this->updateDate]";
        }
    }
