<?php
// created: 2017-08-08 12:50:48
$dictionary["clg_Disciplines"]["fields"]["clg_programs_clg_disciplines"] = array (
  'name' => 'clg_programs_clg_disciplines',
  'type' => 'link',
  'relationship' => 'clg_programs_clg_disciplines',
  'source' => 'non-db',
  'module' => 'clg_Programs',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_CLG_PROGRAMS_CLG_DISCIPLINES_FROM_CLG_DISCIPLINES_TITLE',
  'id_name' => 'clg_programs_clg_disciplinesclg_programs_ida',
  'link-type' => 'one',
);
$dictionary["clg_Disciplines"]["fields"]["clg_programs_clg_disciplines_name"] = array (
  'name' => 'clg_programs_clg_disciplines_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_PROGRAMS_CLG_DISCIPLINES_FROM_CLG_PROGRAMS_TITLE',
  'save' => true,
  'id_name' => 'clg_programs_clg_disciplinesclg_programs_ida',
  'link' => 'clg_programs_clg_disciplines',
  'table' => 'clg_programs',
  'module' => 'clg_Programs',
  'rname' => 'name',
);
$dictionary["clg_Disciplines"]["fields"]["clg_programs_clg_disciplinesclg_programs_ida"] = array (
  'name' => 'clg_programs_clg_disciplinesclg_programs_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CLG_PROGRAMS_CLG_DISCIPLINES_FROM_CLG_DISCIPLINES_TITLE_ID',
  'id_name' => 'clg_programs_clg_disciplinesclg_programs_ida',
  'link' => 'clg_programs_clg_disciplines',
  'table' => 'clg_programs',
  'module' => 'clg_Programs',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
