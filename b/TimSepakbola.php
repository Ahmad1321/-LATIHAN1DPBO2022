<?php

class data
{
	//Deklarasi Variabel
	private $tim = "";
	private $negara = "";
	private $tahun = 0;
	private $jumlah = 0;
	
	
	//Construct
	public function __construct($tim = "", $negara = "", $tahun = 0, $jumlah = 0){
		$this->tim = $tim;
		$this->negara = $negara;
		$this->tahun = $tahun;
		$this->jumlah = $jumlah;
	}
	
	//Set dan get
	public function settim($tim){
		$this->tim = $tim;
	}
	public function gettim(){
		return $this->tim;
	}
	
	public function setnegara($negara){
		$this->negara = $negara;
	}
	public function getnegara(){
		return $this->negara;
	}
	
	public function settahun($tahun){
		$this->tahun = $tahun;
	}
	public function gettahun(){
		return $this->tahun;
	}
	
	public function setjumlah($jumlah){
		$this->jumlah = $jumlah;
	}
	public function getjumlah(){
		return $this->jumlah;
	}
	
	//output print
	public function output(){
	echo "Nama Tim      : ". $this->gettim(). "<br/>";
        echo "Asal Negara   : ". $this->getnegara(). "<br/>";
        echo "Tahun Berdiri : ". $this->gettahun(). "<br/>";
        echo "Jumlah Pemain : ". $this->getjumlah(). "<br/>";
	}
	
}
?>
