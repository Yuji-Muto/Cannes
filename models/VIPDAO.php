<?php
require_once (PATH_MODELS . 'DAO.php');
require_once (PATH_ENTITY . 'VIP.php');

class VIPDAO extends DAO
{
	private $NOMVIP;
	private $PRENOMVIP;
	private $METIER;
	private $DATENAISS;
	private $NATIONALITE;
	private $COEFIMPORT;
	private $IDVIP;
	private $PHOTOVIP;
	
	
	
	function __construct($NOMVIP=null,$PRENOMVIP=null,$METIER=null,$DATENAISS=null
						,$NATIONALITE=null,$COEFIMPORT=null,$IDVIP=null,$PHOTOVIP=null)
						{
							$this->NOMVIP=$NOMVIP;
							$this->PRENOMVIP=$PRENOMVIP;
							$this->METIER=$METIER;
							$this->DATENAISS=$DATENAISS;
							$this->NATIONALITE=$NATIONALITE;
							$this->COEFIMPORT=$COEFIMPORT;
							$this->IDVIP=$IDVIP;
							$this->PHOTOVIP=$PHOTOVIP;
						}
	
	public function getAll($genId = 0)
		{
			if ($genId == 0)
				$res = $this->queryAll('SELECT * FROM VIP');
			else
				$res = $this->queryAll('SELECT * FROM VIP WHERE genId=?', array($genId));
			if ($res == false)
				$VIP = array();
			else {
				foreach ($res as $p) {
					$VIP[] = new VIP($p['NOMVIP'], $p['PRENOMVIP'], $p['METIER'], $p['DATENAISS'] , $p['NATIONALITE'] , $p['IDVIP'], $p['PHOTOVIP']);
				}
			}
			return $VIP;
		}
		 
	public function insertVIP($NOMVIP,$PRENOMVIP,$METIER,$DATENAISS,$NATIONALITE,$COEFIMPORT,$PHOTOVIP)
	{
		$sql='INSERT INTO `VIP` values (?,?,?,?,?,?,null,?);';
		$args=array($NOMVIP,$PRENOMVIP,$METIER,$DATENAISS,$NATIONALITE,$COEFIMPORT,$PHOTOVIP);
		$res = $this->queryBdd($sql,$args);
		
		return $res;
	}
	
	public function getAllVIP()
	{
		$sql='Select * FROM `VIP` order by IDVIP;';
		$res = $this->queryAll($sql);
		
		return $res;
	}
}

?>