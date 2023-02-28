<?php
    echo  $_SESSION['email'];
    $m = new MongoClient();   
	
   // select a database
   $db = $m->mydb;   
   $collection = $db->mycol;   
   
   // now remove the document
   $collection->remove(array("title"=>"MongoDB Tutorial"),false);   
   
   // now display the available documents
   $cursor = $collection->find();
	
   // iterate cursor to display title of documents   
	
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
?>