<?php

return array("#tableName"=>"Role","#primaryKeys"=>array("id"),"#manyToOne"=>array(),"#fieldNames"=>array("id"=>"id","name"=>"name","users"=>"users"),"#nullable"=>"","#notSerializable"=>array("users"),"#oneToMany"=>array("users"=>array("mappedBy"=>"role","className"=>"models\User")));
