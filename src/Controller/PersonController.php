<?php

namespace Controller;

use Model\Person;

class PersonController
{
    public function getPerson()
    {
        // person has been get
    }

    public function addPerson()
    {
        $person = new Person;
        $this->orm->addPerson($person);
    }

    public function deletePerson()
    {
        // person has been deleted
    }

    public function updatePerson()
    {
        // person has been updated
    }
}