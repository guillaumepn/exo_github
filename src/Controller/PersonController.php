<?php

namespace Controller;

use Model\Personne;

class PersonController
{
    public function getPerson()
    {
        // person has been get
    }

    public function addPerson()
    {
        // person has been added

    }

    public function deletePerson(Person $person)
    {
        $this->orm->deletePerson($person;)
    }

    public function updatePerson()
    {
        // person has been updated
    }
}