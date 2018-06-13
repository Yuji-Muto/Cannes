<?php

class VIP
    {
	private $_NOMVIP;
	private $_PRENOMVIP;
	private $_METIER;
	private $_DATENAISS;
    private $_NATIONALITE;
	private $_COEFIMPORT;
	private $_IDVIP;
	private $_PHOTOVIP;
	
	public function __construct($ID,$TITRE,$RESUME,$NOMFICHIER,$NATIONALITE)
	{
		$this->_NOMVIP = $ID;
		$this->_PRENOMVIP = $TITRE;
		$this->_METIER = $RESUME;
		$this->_DATENAISS = $NOMFICHIER;
        $this->_NATIONALITE = $NATIONALITE;
		$this->_COEFIMPORT = $COEFIMPORT;
		$this->_IDVIP = $IDVIP;
		$this->_PHOTOVIP = $PHOTOVIP;
	}
	
	public function getID(){
		return $this->_NOMVIP;
	}
	public function setID($ID){
		$this->_NOMVIP = $ID;
	}
	
	public function getTITRE(){
		return $this->_PRENOMVIP;
	}
	public function setTITRE($TITRE){
		$this->_PRENOMVIP = $TITRE;
	}
	
	public function getRESUME(){
		return $this->_METIER;
	}
	public function setRESUME($RESUME){
		$this->_METIER = $RESUME;
	}
	
	public function getNOMFICHIER(){
		return $this->_DATENAISS;
	}
	public function setNMOFICHIER($NOMFICHIER){
		$this->_DATENAISS = $NOMFICHIER;
	}
        public function getNATIONALITE(){
		return $this->_NATIONALITE;
	}
	public function setNATIONALITE($NATIONALITE){
		$this->_NATIONALITE = $NATIONALITE;
	}
	public function getCOEFIMPORT(){
		return $this->_COEFIMPORT;
	}
	public function setCOEFIMPORT($COEFIMPORT){
		$this->_COEFIMPORT = $COEFIMPORT;
	}
	public function getIDVIP(){
		return $this->_IDVIP;
	}
	public function setIDVIP($IDVIP){
		$this->_IDVIP = $IDVIP;
	}
	public function getPHOTOVIP(){
		return $this->_PHOTOVIP;
	}
	public function setPHOTOVIP($PHOTOVIP){
		$this->_PHOTOVIP = $PHOTOVIP;
	}
}
?>