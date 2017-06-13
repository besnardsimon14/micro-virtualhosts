<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\User' => 
  array (
  ),
),
  'models\\User::$id' => array(
    array('#name' => 'id', '#type' => 'micro\\annotations\\IdAnnotation')
  ),
  'models\\User::$role' => array(
    array('#name' => 'manyToOne', '#type' => 'micro\\annotations\\ManyToOneAnnotation'),
    array('#name' => 'joinColumn', '#type' => 'micro\\annotations\\JoinColumnAnnotation', "className"=>"models\Role","name"=>"idrole","nullable"=>false)
  ),
  'models\\User::$hosts' => array(
    array('#name' => 'oneToMany', '#type' => 'micro\\annotations\\OneToManyAnnotation', "mappedBy"=>"user","className"=>"models\Host")
  ),
  'models\\User::$virtualhosts' => array(
    array('#name' => 'oneToMany', '#type' => 'micro\\annotations\\OneToManyAnnotation', "mappedBy"=>"user","className"=>"models\Virtualhost")
  ),
);

