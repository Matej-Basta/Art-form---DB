<?php

class Artist
{
    public $id = null;
    public $name = null;
    public $birth = null;
    public $death = null;
    public $bio = null;
    public $country = null;
    public $movement = null;
    public $picture_url = null;

    public function hydrateFromRequest()
    {
        $this->id = $_POST["id"] ?? $this->id;
        $this->name = $_POST["name"] ?? $this->name;
        $this->birht = $_POST["birth"] ?? $this->birth;
        $this->death = $_POST["death"] ?? $this->death;
        $this->bio = $_POST["bio"] ?? $this->bio;
        $this->country = $_POST["country"] ?? $this->country;
        $this->movement = $_POST["movement"] ?? $this->movement;
        $this->picture_url = $_POST["picture_url"] ?? $this->picture_url;
    }
}