<?php

return array("#tableName"=>"Host","#primaryKeys"=>array("id"),"#manyToOne"=>array("user"),"#fieldNames"=>array("id"=>"id","name"=>"name","ipv4"=>"ipv4","ipv6"=>"ipv6","servers"=>"servers","user"=>"idUser"),"#nullable"=>"","#notSerializable"=>array("servers","user"),"#oneToMany"=>array("servers"=>array("mappedBy"=>"host","className"=>"models\Server")),"#joinColumn"=>array("user"=>array("className"=>"models\User","name"=>"idUser","nullable"=>false)),"#invertedJoinColumn"=>array("idUser"=>array("member"=>"user","className"=>"models\User")));
