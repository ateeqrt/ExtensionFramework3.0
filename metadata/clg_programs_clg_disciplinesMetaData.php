<?php
// created: 2017-08-08 12:50:47
$dictionary["clg_programs_clg_disciplines"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'clg_programs_clg_disciplines' => 
    array (
      'lhs_module' => 'clg_Programs',
      'lhs_table' => 'clg_programs',
      'lhs_key' => 'id',
      'rhs_module' => 'clg_Disciplines',
      'rhs_table' => 'clg_disciplines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clg_programs_clg_disciplines_c',
      'join_key_lhs' => 'clg_programs_clg_disciplinesclg_programs_ida',
      'join_key_rhs' => 'clg_programs_clg_disciplinesclg_disciplines_idb',
    ),
  ),
  'table' => 'clg_programs_clg_disciplines_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'clg_programs_clg_disciplinesclg_programs_ida' => 
    array (
      'name' => 'clg_programs_clg_disciplinesclg_programs_ida',
      'type' => 'id',
    ),
    'clg_programs_clg_disciplinesclg_disciplines_idb' => 
    array (
      'name' => 'clg_programs_clg_disciplinesclg_disciplines_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clg_programs_clg_disciplinesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clg_programs_clg_disciplines_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clg_programs_clg_disciplinesclg_programs_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clg_programs_clg_disciplines_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'clg_programs_clg_disciplinesclg_disciplines_idb',
      ),
    ),
  ),
);