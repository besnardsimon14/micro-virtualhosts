<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\Host' => 
  array (
  ),
),
  'models\\Host::$id' => array(
    array('#name' => 'id', '#type' => 'micro\\annotations\\IdAnnotation')
  ),
  'models\\Host::$servers' => array(
    array('#name' => 'oneToMany', '#type' => 'micro\\annotations\\OneToManyAnnotation', "mappedBy"=>"host","className"=>"models\Server")
  ),
  'models\\Host::$user' => array(
    array('#name' => 'manyToOne', '#type' => 'micro\\annotations\\ManyToOneAnnotation'),
    array('#name' => 'joinColumn', '#type' => 'micro\\annotations\\JoinColumnAnnotation', "className"=>"models\User","name"=>"idUser","nullable"=>false)
  ),
);

