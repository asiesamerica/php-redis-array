<?php 
 header('Content-Type: text/html; charset=utf-8');
 error_reporting(E_ALL);
 ini_set("display_errors", 1);

//$host='127.0.0.1';
//$database='profesion';
//
//$port='27017';
//
//$username='adrian';
//
//$password='papa700';
//
//
//$connecting_string =  sprintf('mongodb://%s:%d/%s', $host, $port,$database);
//
//$connection=  new MongoClient($connecting_string,array('username'=>$username,'password'=>$password));
//
//
//$dbname = $connection->selectDB('profesion');
//
//
//
//$collectionBox=$dbname->selectCollection('box');






 
$handle = fopen("carreteras.txt", "r");
$iterator=-1;
$boxes=array();
if ($handle) {
    while (($line = fgets($handle)) !== false) {
            $iterator++;
             
              //echo $line;
              echo "<br>";
              
              $data = explode("|",$line);
              $totalData =  count($data);
              echo "<br>";
              echo "<br>";
              if($totalData==5 || $totalData==4){
              var_dump($data);    
              echo  "Name: ".$data[$totalData-3]."|Data ".$data[$totalData-1];
              }else{
              var_dump($data);    
              echo  "Name: ".$data[$totalData-2]." |Data ".$data[$totalData-1];    
              }
              echo "<br>";
             
             //$boxes[$iterator] = array("box"=>(string)$data[0],"neighborhood"=>(string)$data[1],"type"=>(string)$data[2],"county"=>(string)$data[3],"state"=>(string)$data[4]);
             
             //$collectionBox->insert($box);
             
             
             //echo "CP: ".$data[0]."- COLONIA: ".$data[1]."-TIPO: ".$data[2]."- MUNICIPIO".$data[3]."- ESTADO: ".$data[4]."- NOMBRE:".$data[5];
             
            // process the line read.
    }

    fclose($handle);
} else {
    // error opening the file.
} 


//foreach($boxes as $box){
//
//   
//   $neighborhood = $box['neighborhood'];
//   $pobox=$box['box'];
//    
//   var_dump($neighborhood);
//   $value= utf8_encode ($neighborhood);
//    
//   $collectionBox->insert(array("box"=>(int)$pobox,"neighborhood"=>$value));   
//
//}

?>