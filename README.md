# CryptThat
CryptThat is a short class which permit to make text hashes using 3 private keys.

## Usage
Here is a basic usage of this class.  
**Don't forget to change the 3 private keys of 64 char, in order to maintain a strong security !**  
You can use this website to generate unique strings [TextMechanic](http://textmechanic.com/Random-String-Generator.html)  

![Sample configuration](http://i.imgur.com/nViGKMm.png)

```php
require_once("classes/CryptThat.class.php");
    
// Initialize the 3 private keys.
$params = array(
    "34b1dac21df43b17d23014d42d5c25f2195170a9f101cf137b3d5975af29ec0c",
    "8320230184e36ced6sn764fcccc24f935cec1648450ca8d818ec6abf83dcbd39",
    "db57830f163cc31371b720543d6613a98al32ee495ec44560441792846c4b751"
);
    
$crypter = new CryptThat($params);
    
// Crypt a text :
$crypter->getHash("SkyzohKey");
    
// Get the last hash :
$crypter->getLastHash();
```

## License
```
The MIT License (MIT)

Copyright (c) 2015 SkyzohKey

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
