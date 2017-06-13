<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\Server' => 
  array (
  ),
),
  'models\\Server::$id' => array(
    array('#name' => 'id', '#type' => 'micro\\annotations\\IdAnnotation')
  ),
  'models\\Server::$host' => array(
    array('#name' => 'manyToOne', '#type' => 'micro\\annotations\\ManyToOneAnnotation'),
    array('#name' => 'joinColumn', '#type' => 'micro\\annotations\\JoinColumnAnnotation', "className"=>"models\Host","name"=>"idHost","nullable"=>false)
  ),
  'models\\Server::$virtualhosts' => array(
    array('#name' => 'oneToMany', '#type' => 'micro\\annotations\\OneToManyAnnotation', "mappedBy"=>"server","className"=>"models\Virtualhost")
  ),
  'models\\Server::$stype' => array(
    array('#name' => 'manyToOne', '#type' => 'micro\\annotations\\ManyToOneAnnotation'),
    array('#name' => 'joinColumn', '#type' => 'micro\\annotations\\JoinColumnAnnotation', "className"=>"models\Stype","name"=>"idStype","nullable"=>false)
  ),
);

