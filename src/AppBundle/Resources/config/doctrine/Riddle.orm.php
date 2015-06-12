<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'title',
   'fieldName' => 'title',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'riddle',
   'fieldName' => 'riddle',
   'type' => 'blob',
  ));
$metadata->mapField(array(
   'columnName' => 'answer',
   'fieldName' => 'answer',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'false1',
   'fieldName' => 'false1',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'false2',
   'fieldName' => 'false2',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'false3',
   'fieldName' => 'false3',
   'type' => 'text',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);