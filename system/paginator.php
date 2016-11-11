<?php
  
   $total  =$_REQUEST['num_rows'];
   $paginas  =intval($total/5);
   $resto  =$total%5;
   $corrente  =$_REQUEST['page'];
   $p_pagina = $_REQUEST['p_pagina'];
   $page_input= $_REQUEST['page_input']; 
   $controller = $_REQUEST['controller']; 
   $filtro = $_REQUEST['filtro'];
   $local = $_REQUEST['local'];
   $array_pages = [];
   
  
  
   if($resto > 0){
	    $paginas+=1;
   }
   
   $de = ($corrente*$p_pagina)-$p_pagina+1;
   $ate = $corrente*$p_pagina;
   if($corrente == $paginas ){
      if($corrente != 1){
        $ate  = $corrente*$p_pagina - $resto;
	  }
	  else{
	      $ate  = $resto;
	  }
   }
 
    
	
     $antr =  $corrente - 3; 
	 while($antr < $corrente){
	   if($antr > -1){
	     array_push($array_pages,$antr+1);
	   }
	   $antr++;
	 }
	 $qtd_falta = 6 - sizeof($array_pages);
	 while($qtd_falta > 0){
	  array_push($array_pages,$corrente+$qtd_falta);
	  $qtd_falta--;
	 }
	 sort($array_pages);
    
  


?>

<div class="pagination-container">
  <ul class="pagination">
    
	  <li><a href="#" onclick="setPaginator2(this,'<?=$page_input?>','<?=$controller?>','<?=$filtro?>','<?=$local?>')"  rel="<?=($corrente-1)?>">&laquo;</a></li>
	  <?php
	    
		foreach ($array_pages as $page) {
		      if($page <= $paginas){
               $active = ($page==$corrente)?"active":"";	
			   
								
		?> 
		      <li class="<?=$active?>"><a href="#"  rel="<?=$page?>" onclick="setPaginator2(this,'<?=$page_input?>','<?=$controller?>','<?=$filtro?>','<?=$local?>')"><?=$page?></a></li>
                                     
		<?php
		       }
		  } 
		?>   
	 
        <li><a href="#" onclick="setPaginator2(this,'<?=$page_input?>','<?=$controller?>','<?=$filtro?>','<?=$local?>')"  rel="<?=($corrente+1)?>">&raquo;</a></li>
   </ul>
</div>



