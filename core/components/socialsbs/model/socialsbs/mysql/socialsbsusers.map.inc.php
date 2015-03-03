<?php
$xpdo_meta_map['SocialsbsUsers']= array (
  'package' => 'socialsbs',
  'version' => '1.1',
  'table' => 'socialsbs_users',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'company' => NULL,
    'jobtitle' => NULL,
  ),
  'fieldMeta' => 
  array (
    'company' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'jobtitle' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
  'aggregates' => 
  array (
    'Users' => 
    array (
      'class' => 'modUser',
      'local' => 'id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
