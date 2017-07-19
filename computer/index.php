 <link rel="stylesheet" href="css/arvore.css">
<?php
   
   include_once("directory.php");
   include_once("file.php");
  
  
   
   $dir = new php_directory();
   $corrente =  $dir->CurrentDirectory();
   echo $corrente;
    
	
 //  print_r($dir->listDir($corrente));
   //print_r($dir->orderDir($corrente));
  
    //$dir->listDirectory($corrente,"");
	//$dir->listCurrentDir($corrente,"");
	//$dir->createDir($corrente."/teste");
	
   
    //$dir->copyDirectory('./bandeiras/', './teste');
	//$dir->deleteDirectory('./remover/');
	//$dir->copyDirectory('./bandeiras/', './mover',true);
	$arquivo = new php_file();
	//$arquivo->copiar("file.php","teste.php");
	//$arquivo->deletar("teste.php");
	
	//echo $arquivo->get_ext_file('index.php'); 
?>
