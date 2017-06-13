<?php

return array("#tableName"=>"Stype","#primaryKeys"=>array("id"),"#manyToOne"=>array(),"#fieldNames"=>array("id"=>"id","name"=>"name","configTemplate"=>"configTemplate","prism"=>"prism","servers"=>"servers","stypepropertys"=>"stypepropertys"),"#nullable"=>"","#notSerializable"=>array("servers","stypepropertys"),"#oneToMany"=>array("servers"=>array("mappedBy"=>"stype","className"=>"models\Server"),"stypepropertys"=>array("mappedBy"=>"stype","className"=>"models\Stypeproperty")));
