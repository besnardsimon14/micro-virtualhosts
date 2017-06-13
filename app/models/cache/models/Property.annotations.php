<?php

return array("#tableName"=>"Property","#primaryKeys"=>array("id"),"#manyToOne"=>array(),"#fieldNames"=>array("id"=>"id","name"=>"name","description"=>"description","prority"=>"prority","required"=>"required","stypepropertys"=>"stypepropertys","virtualhostpropertys"=>"virtualhostpropertys"),"#nullable"=>"","#notSerializable"=>array("stypepropertys","virtualhostpropertys"),"#oneToMany"=>array("stypepropertys"=>array("mappedBy"=>"property","className"=>"models\Stypeproperty"),"virtualhostpropertys"=>array("mappedBy"=>"property","className"=>"models\Virtualhostproperty")));
