<?php

    /**
     * Class ExpensesTable
     *
     * Represents the `lmgc_Expenses` table in the database.
     */
    class Expense
    {
        private $id;
        private $expenseTypeId;
        private $amount;
        private $expenseDate;
        private $note;
        private $propertyId;
        private $colore;
        private $createDate;
        private $updateDate;

        public function __construct()
        {

        }

        // Getter and Setter methods
        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getExpenseTypeId()
        {
            return $this->expenseTypeId;
        }

        public function setExpenseTypeId($expenseTypeId)
        {
            $this->expenseTypeId = $expenseTypeId;
        }

        public function getAmount()
        {
            return $this->amount;
        }

        public function setAmount($amount)
        {
            $this->amount = $amount;
        }

        public function getExpenseDate()
        {
            return $this->expenseDate;
        }

        public function setExpenseDate($expenseDate)
        {
            $this->expenseDate = $expenseDate;
        }

        public function getNote()
        {
            return $this->note;
        }

        public function setNote($note)
        {
            $this->note = $note;
        }

        public function getPropertyId()
        {
            return $this->propertyId;
        }

        public function setPropertyId($propertyId)
        {
            $this->propertyId = $propertyId;
        }

        public function getColore()
        {
            return $this->colore;
        }

        public function setColore($colore)
        {
            $this->colore = $colore;
        }

        public function getCreateDate()
        {
            return $this->createDate;
        }

        public function getUpdateDate()
        {
            return $this->updateDate;
        }

        /**
         * Returns a string representation of the object.
         *
         * @return string
         */
        public function __toString()
        {
            return sprintf(
                "ExpensesTable [id=%s, expenseTypeId=%s, amount=%s, expenseDate=%s, note=%s, propertyId=%s, colore=%s, createDate=%s, updateDate=%s]",
                $this->id,
                $this->expenseTypeId,
                $this->amount,
                $this->expenseDate,
                $this->note,
                $this->propertyId,
                $this->colore,
                $this->createDate,
                $this->updateDate
            );
        }
    }
