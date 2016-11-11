 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php
require_once("path.php");
require_once($include_path.'/system/model/Tb_encrypt.php');
require_once($include_path.'/system/model/Tb_domain.php');
require_once($include_path.'/system/model/Tb_group.php');
require_once($include_path.'/system/dao/genericDao.php');


 
class ComboController{
    
	public function comboGroupUser($nome,$tamanho,$valor,$mostrar,$porcentagem){
			   $group = new Tb_group();
			   
			 
			  $dao = new genericDao();
			  $resultset = $dao->getAll($group);
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
			 
				 
				 $html.="<select id='".$nome."' name='".$nome."' style=\"height:33px;width:".$tamanho.$unidade.";\">";
				 if($mostrar){
					  $html.="<option  value=''>Todos</option>";
				 }
			   
				 while($row = $resultset->fetch_array())
				{
					
					 $selected = $row["id_group"]==$valor?"selected":"";
					 $html.="<option ".$selected." value=\"".$row["id_group"]."\">".utf8_encode($row["name"])."</option>";
				}
				
			  $html.="</select>";
			  return $html;

	 }
	 public function comboDomain($nome,$tamanho,$valor,$mostrar,$porcentagem,$domain_name){
			  $domain = new Tb_domain();
			   
			 
			  $dao = new genericDao();
			  $domain->setDomain_name($domain_name);
			  $domain->setStatus("A");
			  $resultset = $dao->getAll($domain);
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
			 
				 
			   $html.="<select id='".$nome."' name='".$nome."' style=\"height:33px;width:".$tamanho.$unidade.";\">";
				
				 while($row = $resultset->fetch_array())
				{
					
					 $selected = $row["domain_code"]==$valor?"selected":"";
					 $html.="<option ".$selected." value=\"".$row["domain_code"]."\">".utf8_encode($row["domain_value"])."</option>";
				}
				
			  $html.="</select>";
			  return $html;

	 }
	 public function comboEncrypt($nome,$tamanho,$valor,$mostrar,$porcentagem){
			  $encrypt = new Tb_encrypt();
			   
			 
			  $dao = new genericDao();
			  $resultset = $dao->getAll($encrypt);
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
			 
				 
			   $html.="<select id='".$nome."' name='".$nome."' style=\"height:33px;width:".$tamanho.$unidade.";\">";
				
				 while($row = $resultset->fetch_array())
				{
					
					 $selected = $row["id_encrypt"]==$valor?"selected":"";
					 $html.="<option ".$selected." value=\"".$row["id_encrypt"]."\">".utf8_encode($row["encrypt_name"])."</option>";
				}
				
			  $html.="</select>";
			  return $html;

	 }
	 public function comboParentsGroup($nome,$tamanho,$valor,$mostrar,$porcentagem){
			   $group = new Tb_group();
			   
			 
			  $dao = new genericDao();
			  $group->setId_group_pai(0);
			  $resultset = $dao->getAll($group);
			  $html = "";
			  $selected = "";
			  $unidade = "px";
				 if($porcentagem){
					 
					 $unidade = "%";
				 }
			 
				 
				 $html.="<select id='".$nome."' name='".$nome."' style=\"height:33px;width:".$tamanho.$unidade.";\">";
				 if($mostrar){
					  $html.="<option  value='0'>No Parent</option>";
				 }
			   
				 while($row = $resultset->fetch_array())
				{
					
					 $selected = $row["id_group"]==$valor?"selected":"";
					 $html.="<option ".$selected." value=\"".$row["id_group"]."\">".utf8_encode($row["name"])."</option>";
				}
				
			  $html.="</select>";
			  return $html;

	 }
	 



}



?>