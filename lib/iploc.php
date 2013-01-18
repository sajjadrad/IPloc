<?php
	require('conf.php');
	class iploc
	{
		public function getIPInfo($ip,$option)
		{
			$tempArray = explode('.',$ip);
			$ipInt = ($tempArray[0]<<24) + ($tempArray[1]<<16) + ($tempArray[2]<<8) + $tempArray[3];
			$db_IP = R::findOne('geoip','startip < ? and endip > ?',array($ipInt,$ipInt));
			if($db_IP)
			{
				switch ($option) {
					case 'countryname':
						return $db_IP->countryname;
						break;
					case 'countrycode':
						return $db_IP->countrycode;
						break;
					default:
						return "Invalid Option";
						break;
				}
			}
			else
				return "Not Found!";
		}
	}
?>