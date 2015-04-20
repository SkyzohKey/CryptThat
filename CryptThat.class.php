<?php
class CryptThat
{
  private $salt = null;
  private $peper = null;
  private $oignon = null;
	
  private $lastHash = null;

  function __construct($params)
  {
    if(count($params) != 3)
      die("You must use 3 private keys to be able to encrypt something. Please check your init call to this Class.");

    $this->salt = $params[0];
    $this->peper = $params[1];
    $this->oignon = $params[2];
  }

  function getHash($sentence)
  {
    $a = hash('ripemd160', $sentence);
    $b = sha1(hash("haval256,5", sha1($a)) . md5($sentence . hash("sha512", $this->salt . $a)) . hash("gost", $this->peper . md5($a)));
    $this->lastHash = hash("gost", $b . hash("sha512", $a . hash("sha256", $this->oignon)) . hash("haval256,5", $this->salt . $this->peper . $this->oignon));
	
    return $this->lastHash;
  }
	
  function lastHash()
  {
    return $this->lastHash;
  }
}
