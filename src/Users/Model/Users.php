<?php

namespace Users\Model;

class Users
{
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $age;
    private $company;
    private $school;
    private $phone;
    private $image;
    private $cv;
    private $created;
    private $startingDate;
    private $length;

    public function getId()
    {
        return $this->id;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setSchool($school)
    {
        $this->school = $school;
        return $this;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setCv($cv)
    {
        $this->cv = $cv;
        return $this;
    }

    public function getCv()
    {
        return $this->cv;
    }

    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setSatrtingDate($startingDate)
    {
        $this->startingDate = $startingDate;
        return $this;
    }

    public function getStartingDate()
    {
        return $this->startingDate;
    }

    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }
}