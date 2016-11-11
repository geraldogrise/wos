 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php 

$id_user_query = $_SESSION['user_system'];
$query = " SELECT tbo.id_open as id_open, name as name ,tbou.callFunction as callFunction, flagchangepath as flagchangepath ";
$query .= " FROM tb_open tbo left join tb_open_user tbou on tbo.id_open= tbou.id_open ";
$query .= " WHERE 1 =1 and ";
$query .= " id_user = {$id_user_query} ";
$query .= " union all  ";
$query .= " SELECT tbo.id_open as id_open, name as name ,tbo.callFunction as callFunction, flagchangepath as flagchangepath ";
$query .= " FROM tb_open tbo WHERE 1 =1 and  id_open  ";
$query .= " not in(SELECT  tboi.id_open FROM tb_open tboi left join tb_open_user tbou on tboi.id_open= tbou.id_open  ";
$query .= " WHERE 1 =1 and id_user = {$id_user_query }) ";
$query .= " order by id_open ";

$daoquery = new genericDao();
$result_program = $dao->executeQueryByString($query);

?>
<script>
/* -------------- open methods php-----------------*/
<?php
while($row = $result_program->fetch_array()){ 
   $name = ucfirst($row["name"]);
   $call = $row["callFunction"];
   echo " function open{$name}(filePath){ \n";
   
   if($row["flagchangepath"] == "S"){ 
			echo " filePath = filePath.substring(filePath.indexOf(\"www#\")); \n";
			echo "  if(filePath.indexOf(\"www#\") != -1){\n";
			  echo "    filePath = filePath.replace(\"www#\",\"\").replace().replace(/\#/g, \"/\");\n";
			echo " } \n";
		   echo " else if(filePath.indexOf(\"htdocs#\") != -1){ \n";
		      echo "     filePath = filePath.split(\"htdocs#\")[1]; \n";
		   echo " } \n";
		  echo " file_op = location.protocol+\":#\"+location.hostname+\"#\"+filePath \n";
   }else{
           echo " file_op = filePath; \n";
   }
   echo $call ."\n"; 
      
   echo " } \n";
?>


<?php
}
?>
</script>