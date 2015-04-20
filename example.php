<?php
// Require the lib' to work.
require_once("CryptThat.class.php");

// Initialize the 3 key that the lib' will use.
$params = array(
	"34b1dac21df43b17d23014d42d5c25f2195170a9f101cf137b3d5975af29ec0c",
	"8320230184e36ced6sn764fcccc24f935cec1648450ca8d818ec6abf83dcbd39",
	"db57830f163cc31371b720543d6613a98al32ee495ec44560441792846c4b751"
);

// Init the lib'.
$crypter = new CryptThat($params);
$textToHash = "I'm a super text.";

// Crypt the pass using the lib'.
$hash = $crypter->getHash($textToHash);
echo("Hashed text: " . $hash);

$last = $crypter->getLastHash();
echo("Last hashed text: " . $last);
