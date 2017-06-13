<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\Role' => 
  array (
  ),
),
  'models\\Role::$id' => array(
    array('#name' => 'id', '#type' => 'micro\\annotations\\IdAnnotation')
  ),
  'models\\Role::$users' => array(
    array('#name' => 'oneToMany', '#type' => 'micro\\annotations\\OneToManyAnnotation', "mappedBy"=>"role","className"=>"models\User")
  ),
);

