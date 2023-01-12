<?php

/**
 * Fields Summary:
 * - RunningType [select]
 * - SoleMaterial [select]
 * - Fastening [select]
 * - Cushioning [select]
 * - Size [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Shoes',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'WomenFootwear',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'RunningType',
             'title' => 'Running Type',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'LongDistance',
                'value' => 'LongDistance',
              ),
              1 => 
              array (
                'key' => 'RoadRunning',
                'value' => 'RoadRunning',
              ),
              2 => 
              array (
                'key' => 'Trekking',
                'value' => 'Trekking',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'SoleMaterial',
             'title' => 'Sole Material',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Rubber',
                'value' => 'Rubber',
              ),
              1 => 
              array (
                'key' => 'EVA',
                'value' => 'EVA',
              ),
              2 => 
              array (
                'key' => 'PU',
                'value' => 'PU',
              ),
              3 => 
              array (
                'key' => 'PVC',
                'value' => 'PVC',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'Fastening',
             'title' => 'Fastening',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'LaceUps',
                'value' => 'LaceUps',
              ),
              1 => 
              array (
                'key' => 'SlipOn',
                'value' => 'SlipOn',
              ),
              2 => 
              array (
                'key' => 'Velcro',
                'value' => 'Velcro',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'Cushioning',
             'title' => 'Cushioning',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'High',
                'value' => 'High',
              ),
              1 => 
              array (
                'key' => 'Low',
                'value' => 'Low',
              ),
              2 => 
              array (
                'key' => 'Medium',
                'value' => 'Medium',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'Size',
             'title' => 'Size',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'UK1',
                'value' => 'UK1',
              ),
              1 => 
              array (
                'key' => 'UK2',
                'value' => 'UK2',
              ),
              2 => 
              array (
                'key' => 'UK3',
                'value' => 'UK3',
              ),
              3 => 
              array (
                'key' => 'UK4',
                'value' => 'UK4',
              ),
              4 => 
              array (
                'key' => 'UK5',
                'value' => 'UK5',
              ),
              5 => 
              array (
                'key' => 'UK6',
                'value' => 'UK6',
              ),
              6 => 
              array (
                'key' => 'UK7',
                'value' => 'UK7',
              ),
              7 => 
              array (
                'key' => 'UK8',
                'value' => 'UK8',
              ),
              8 => 
              array (
                'key' => 'UK9',
                'value' => 'UK9',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => '',
         'labelWidth' => 0,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Footwear',
      'fieldname' => 'WomenFootwear',
    ),
  ),
));
