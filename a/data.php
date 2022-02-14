<?php

class data
{
    private $nim = "";
    private $nama = "";
    private $gender = "";
    private $studi = "";
    private $semester = 0;

    // constructor
    public function __construct($nim = "", $nama = "", $gender = "", $studi = "", $semester = 0)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->studi = $studi;
        $this->semester = $semester;
    }

    // setter dan getter method
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setStudi($studi)
    {
        $this->studi = $studi;
    }

    public function getStudi()
    {
        return $this->studi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }

    // output
    public function output()
    {
        echo "NIM 		    : ". $this->getNim()."<br/>";
        echo "Nama          : ". $this->getNama()."<br/>";
        echo "Jenis Kelamin : ". $this->getGender()."<br/>";
        echo "Studi         : ". $this->getStudi()."<br/>";
        echo "Semester  	: ". $this->getSemester()."<br/>";
    }
}

?>