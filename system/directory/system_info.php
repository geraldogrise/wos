 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


   class system_info{

          public function getLanguage(){
		      $language =  $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			  $language = substr($language ,0,strpos($language ,","));
			  return $language ;
		  
		  }
		  public function getOs(){
					 
				$browser = $_SERVER['HTTP_USER_AGENT'];
				if(preg_match('/Linux/',$browser)) $os = 'Linux';
				elseif(preg_match('/Win/',$browser)) $os = 'Windows';
				elseif(preg_match('/Mac/',$browser)) $os = 'Mac';
				else $os = 'UnKnown';
				return $os;

		  
		  }
		  public function getHostName(){
		  
		      return php_uname('n');
		  }
		  public function getMemoryUsage(){
		  
		     return memory_get_usage();
		  }
		  public function getPeakMemoryUsage(){
		  
		     return memory_get_peak_usage();
		  }
		  public function getDiskFree($disk){
		     return disk_free_space($disk);
		  }
		  public function getDiskTotal($disk){
		     return disk_total_space($disk);
		  }
		  public function get_disks(){ 
	   
				if(php_uname('s')=='Windows NT'){ 
					// windows 
				  
					$disk=`fsutil fsinfo drives`; 
					 $disk = substr($disk ,strpos($disk,":")+1);
					 $disks = explode("\\",$disk) ;
					
					return $disks; 
				}else{ 
					// unix 
					$data=`mount`; 
					$data=explode(' ',$data); 
					$disks=array(); 
					foreach($data as $token)if(substr($token,0,5)=='/dev/')$disks[]=$token; 
					return $disks; 
				} 
			} 
			public function getSystemVersion(){
			
			    $soft = $_SERVER['SERVER_SOFTWARE'];
				$version="unkown";

				if(strpos($soft,"64")){
				  $version= "64";

				}
				else if(strpos("soft","32")){
				  $version= "32";
				}
				return $version;
			}
			public function getphpVersion(){
			     $version ="";
			    switch(PHP_INT_SIZE) {
					case 4:
						$version = '32';
						break;
					case 8:
						$version = '64';
						break;
					default:
						$version = 'PHP_INT_SIZE is ' . PHP_INT_SIZE;
				}
                 return $version;
			}
			function getBrowser() 
			{ 
				$u_agent = $_SERVER['HTTP_USER_AGENT']; 
				$bname = 'Unknown';
				$platform = 'Unknown';
				$version= "";
				$ub ="";

				//First get the platform?
				if (preg_match('/linux/i', $u_agent)) {
					$platform = 'linux';
				}
				elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
					$platform = 'mac';
				}
				elseif (preg_match('/windows|win32/i', $u_agent)) {
					$platform = 'windows';
				}
				
				// Next get the name of the useragent yes seperately and for good reason
				if(preg_match('/Trident/i',$u_agent)) 
				{ 
					$bname = 'Internet Explorer'; 
					$ub = "Trident"; 
				} 
				elseif(preg_match('/Firefox/i',$u_agent)) 
				{ 
					$bname = 'Mozilla Firefox'; 
					$ub = "Firefox"; 
				} 
				elseif(preg_match('/Chrome/i',$u_agent)) 
				{ 
					$bname = 'Google Chrome'; 
					$ub = "Chrome"; 
				} 
				elseif(preg_match('/Safari/i',$u_agent)) 
				{ 
					$bname = 'Apple Safari'; 
					$ub = "Safari"; 
				} 
				elseif(preg_match('/Opera/i',$u_agent)) 
				{ 
					$bname = 'Opera'; 
					$ub = "Opera"; 
				} 
				elseif(preg_match('/Netscape/i',$u_agent)) 
				{ 
					$bname = 'Netscape'; 
					$ub = "Netscape"; 
				} 
				
				// finally get the correct version number
				$known = array('Version', $ub, 'other');
				$pattern = '#(?<browser>' . join('|', $known) .
				')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
				if (!preg_match_all($pattern, $u_agent, $matches)) {
					// we have no matching number just continue
				}
				
				// see how many we have
				$i = count($matches['browser']);
				if ($i != 1) {
					//we will have two since we are not using 'other' argument yet
					//see if version is before or after the name
					if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
						$version= $matches['version'][0];
					}
					else {
						$version= $matches['version'][1];
					}
				}
				else {
					$version= $matches['version'][0];
				}
				
				// check if we have a number
				if ($version==null || $version=="") {$version="?";}
				
				return array(
					'userAgent' => $u_agent,
					'name'      => $bname,
					'version'   => $version,
					'platform'  => $platform,
					'pattern'    => $pattern
				);
			} 
			public function getImageBrowser(){
	             $u_agent = $_SERVER['HTTP_USER_AGENT']; 
				$img_browser = "";
				$img_browser =  $u_agent ;
				if(preg_match('/Trident/i',$u_agent)) 
				{ 
					$img_browser  = 'ie.png'; 
					
				} 
				elseif(preg_match('/Firefox/i',$u_agent)) 
				{ 
					$img_browser  = 'firefox.png'; 
				} 
				elseif(preg_match('/Chrome/i',$u_agent)) 
				{ 
					$img_browser  = 'chrome.png'; 
				} 
				elseif(preg_match('/Safari/i',$u_agent)) 
				{ 
					$img_browser  = 'safari.png';  
				} 
				elseif(preg_match('/Opera/i',$u_agent)) 
				{ 
					$img_browser  = 'opera.png';  
				} 
				elseif(preg_match('/Netscape/i',$u_agent)) 
				{ 
					$img_browser  = 'netscape.png';  
				}
				return $img_browser;

 				
	
	        }





   }







?>
