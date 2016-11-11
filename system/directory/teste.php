 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
//echo $_SERVER['HTTP_REFERER'];

//echo urlencode( $_SERVER['HTTP_REFERER'] )."<br />>";
 //phpinfo();
 
 //print_r( $GLOBALS );

?>

<?php
 unlink("C:\\wamp\\www\\estudo\\wos\\system\\directory\\abc.php");
?>



<?php

function get_server_load() 
{
    $load=array();
    if (stristr(PHP_OS, 'win')) 
    {
        $wmi = new COM("Winmgmts://");
        $server = $wmi->execquery("SELECT LoadPercentage FROM Win32_Processor");  
        $cpu_num = 0;
        $load_total = 0;
        foreach($server as $cpu)
        {
            $cpu_num++;
            $load_total += $cpu->loadpercentage;
        }

        $load[]= round($load_total/$cpu_num);

    } 
    else
    {
        $load = sys_getloadavg();
    }
    return $load;
}
echo implode(' ',get_server_load())."<br>";


disk_free_space("C:");

 function get_disks(){ 
	   
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
			
			 $disks=  get_disks();
			 foreach($disks as $disk){
			     disk_free_space(trim($disk));
			 
			 }
 
?>



