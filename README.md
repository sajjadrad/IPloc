IPloc
=====

Find Country with IP

Prepare Database
===
For first step you must download <a href="http://www.zaigadgets.com">ZaiGadgets</a> <a href="http://zaigadgets.com/geoip">GeoIP CSV database</a> and convert it to MySQL version by <a href="http://www.sajjadrad.com/biter/geoip">Biter GeoIP to MySQL</a>.
<br/>
After that import MySQL table to your GeoIP database.

Configure
===
You should config MySQL database information.
* Open lib/conf.php file
* dbname : Database name
* dbuser : Username
* dbpass : Password


```php
$dbname='geoip';
$dbUser='root';
$dbPass='';
```

Using
===
Its easy!<br/>
Just include <code>lib/iploc.php</code> and create new iploc class.Then call getIPInfo function with two arguments.</br>
* ip : client ip.
* option : choice ip info to return.
* option - countryname : return ip country name.
* option - countrycode : return ip country code.

```php
require('lib/iploc.php');
$ip = $_GET['ip'];
$temp = new iploc();
echo $temp->getIPInfo($ip,"countryname");
```
