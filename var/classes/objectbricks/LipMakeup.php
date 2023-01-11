<?php

/**
 * Fields Summary:
 * - ColourFamily [multiselect]
 * - LipstikFinish [multiselect]
 * - Formulation [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'LipMakeup',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Beauty',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'name' => 'ColourFamily',
             'title' => 'Colour Family',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'multiselect',
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
                'key' => 'Brown',
                'value' => 'Brown',
              ),
              1 => 
              array (
                'key' => 'Maroon',
                'value' => 'Maroon',
              ),
              2 => 
              array (
                'key' => 'Nude',
                'value' => 'Nude',
              ),
              3 => 
              array (
                'key' => 'Nude pink',
                'value' => 'Nude pink',
              ),
              4 => 
              array (
                'key' => 'Orange',
                'value' => 'Orange',
              ),
              5 => 
              array (
                'key' => 'Purple',
                'value' => 'Purple',
              ),
              6 => 
              array (
                'key' => 'Red',
                'value' => 'Red',
              ),
              7 => 
              array (
                'key' => 'Pink',
                'value' => 'Pink',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'name' => 'LipstikFinish',
             'title' => 'Lipstik Finish',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'multiselect',
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
                'key' => 'Creme',
                'value' => 'Creme',
              ),
              1 => 
              array (
                'key' => 'Glossy',
                'value' => 'Glossy',
              ),
              2 => 
              array (
                'key' => 'Matte',
                'value' => 'Matte',
              ),
              3 => 
              array (
                'key' => 'Natural',
                'value' => 'Natural',
              ),
              4 => 
              array (
                'key' => 'Metallic',
                'value' => 'Metallic',
              ),
              5 => 
              array (
                'key' => 'Shimmer',
                'value' => 'Shimmer',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'Formulation',
             'title' => 'Formulation',
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
                'key' => 'Balm',
                'value' => 'Balm',
              ),
              1 => 
              array (
                'key' => 'Oily',
                'value' => 'Gloss',
              ),
              2 => 
              array (
                'key' => 'Scrub',
                'value' => 'Liquid',
              ),
              3 => 
              array (
                'key' => 'Gel',
                'value' => 'Gel',
              ),
              4 => 
              array (
                'key' => '',
                'value' => '',
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
      'classname' => 'Beauty',
      'fieldname' => 'MakeupProducts',
    ),
  ),
));
