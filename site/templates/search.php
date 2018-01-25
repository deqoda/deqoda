

 <?php foreach ( $pages->find('template=single, sort=-created') as $single ):?> 

 <h4> 
 
 <a href="<?php  echo $single->url?>">
 
 <?php echo $single->title?></a></h4>

 <? endforeach; ?>