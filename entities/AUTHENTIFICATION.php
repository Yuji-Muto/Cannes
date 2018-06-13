<?php

class Authentification
{
	private $_IDVIP;
	private $_MDP;
	
	public function __construct($IDVIP,$MDP)
	{
		$this->_IDVIP = $IDVIP;
		$this->_MDP = $MDP;
	}
	
	public function getIDVIP()
	{
		return $this->_IDVIP;
	}
	
	public function setIDVIP($IDVIP)
	{
		$this->_IDVIP = $IDVIP;
	}
	
	public function getMDP()
	{
		return $this->_MDP;
	}
	
	public function setMDP($MDP)
	{
		$this->_MDP = $MDP;
	}
}