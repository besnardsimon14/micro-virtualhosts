<?php

return array(
  '#namespace' => 'micro\\annotations',
  '#uses' => array (
  'PropertyAnnotation' => 'mindplay\\annotations\\standard\\PropertyAnnotation',
  'Annotations' => 'mindplay\\annotations\\Annotations',
  'JArray' => 'micro\\utils\\JArray',
),
  '#traitMethodOverrides' => array (
  'micro\\annotations\\BaseAnnotation' => 
  array (
  ),
),
  'micro\\annotations\\BaseAnnotation' => array(
    array('#name' => 'usage', '#type' => 'mindplay\\annotations\\UsageAnnotation', 'property'=>true, 'inherited'=>true)
  ),
);

