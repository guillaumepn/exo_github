<?php

namespace Controller;

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

    public function deletePerson()
    {
        // person has been deleted
    }

    public function updatePerson()
    {
        // person has been updated
    }

    public function cgetPerson()
    {
        return $this->service->cget();
    }
}