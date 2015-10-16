<?php
// Require the library to work.
require_once("classes/CryptThat.class.php");

/**
 * Initialize the 3 PRIVATE keys that the lib' will use.
 * NOTE: You should never give these key to someone,
 *       keep them in a different file (config.php for example)
 */
$keys = array(
  "34b1dac21df43b17d23014d42d5c25f2195170a9f101cf137b3d5975af29ec0c",
  "8320230184e36ced6sn764fcccc24f935cec1648450ca8d818ec6abf83dcbd39",
  "db57830f163cc31371b720543d6613a98al32ee495ec44560441792846c4b751"
);

// Init the lib'.
$crypter = new CryptThat($keys);
$textToHash = "I'm a super text.";

// Encrypt the given text using the library.
$hash = $crypter->getHash($textToHash);
echo("Hashed text: " . $hash);

// Get the last hash without using more resources.
$last = $crypter->getLastHash();
echo("Last hashed text: " . $last);
