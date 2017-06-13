<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\Property' => 
  array (
  ),
),
  'models\\Property::$id' => array(
    array('#name' => 'id', '#type' => 'micro\\annotations\\IdAnnotation')
  ),
  'models\\Property::$stypepropertys' => array(
    array('#name' => 'oneToMany', '#type' => 'micro\\annotations\\OneToManyAnnotation', "mappedBy"=>"property","className"=>"models\Stypeproperty")
  ),
  'models\\Property::$virtualhostpropertys' => array(
    array('#name' => 'oneToMany', '#type' => 'micro\\annotations\\OneToManyAnnotation', "mappedBy"=>"property","className"=>"models\Virtualhostproperty")
  ),
);

