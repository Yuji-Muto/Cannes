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
	
	public function __construct($ID,$PRENOMVIP,$METIER,$DATENAISS,$NATIONALITE,$IDVIP,$PHOTOVIP)
	{
		$this->_NOMVIP = $ID;
		$this->_PRENOMVIP = $PRENOMVIP;
		$this->_METIER = $METIER;
		$this->_DATENAISS = $DATENAISS;
        $this->_NATIONALITE = $NATIONALITE;
		$this->_COEFIMPORT = $COEFIMPORT;
		$this->_IDVIP = $IDVIP;
		$this->_PHOTOVIP = $PHOTOVIP;
	}
	
	public function getNOMVIP(){
		return $this->_NOMVIP;
	}
	public function setNOMVIP($NOMVIP){
		$this->_NOMVIP = $NOMVIP;
	}
	
	public function getPRENOMVIP(){
		return $this->_PRENOMVIP;
	}
	public function setPRENOMVIP($PRENOMVIP){
		$this->_PRENOMVIP = $PRENOMVIP;
	}
	
	public function getMETIER(){
		return $this->_METIER;
	}
	public function setMETIER($METIER){
		$this->_METIER = $METIER;
	}
	
	public function getDATENAISS(){
		return $this->_DATENAISS;
	}
	public function setDATENAISS($DATENAISS){
		$this->_DATENAISS = $DATENAISS;
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