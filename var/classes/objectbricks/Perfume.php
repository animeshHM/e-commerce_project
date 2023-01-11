<?php

/**
 * Fields Summary:
 * - Formulation [multiselect]
 * - Fragrance [multiselect]
 * - PerfumesBrand [multiselect]
 * - Strenght [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Perfume',
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
                'key' => 'Balm',
                'value' => 'Balm',
                'id' => 'extModel3671-1',
              ),
              1 => 
              array (
                'key' => 'Mist',
                'value' => 'Mist',
                'id' => 'extModel3671-2',
              ),
              2 => 
              array (
                'key' => 'Liquid',
                'value' => 'Liquid',
                'id' => 'extModel3671-3',
              ),
              3 => 
              array (
                'key' => 'Roll on',
                'value' => 'Roll on',
                'id' => 'extModel3671-4',
              ),
              4 => 
              array (
                'key' => 'Spray',
                'value' => 'Spray',
                'id' => 'extModel3671-5',
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
             'name' => 'Fragrance',
             'title' => 'Fragrance',
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
                'key' => 'Floral',
                'value' => 'Floral',
                'id' => 'extModel4063-1',
              ),
              1 => 
              array (
                'key' => 'Fresh',
                'value' => 'Fresh',
                'id' => 'extModel4063-2',
              ),
              2 => 
              array (
                'key' => 'Oceanic',
                'value' => 'Oceanic',
                'id' => 'extModel4063-3',
              ),
              3 => 
              array (
                'key' => 'Woody',
                'value' => 'Woody',
                'id' => 'extModel4063-4',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'name' => 'PerfumesBrand',
             'title' => 'Perfumes Brand',
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
                'key' => 'AXE',
                'value' => 'AXE',
                'id' => 'extModel4330-1',
              ),
              1 => 
              array (
                'key' => 'Denver',
                'value' => 'Denver',
                'id' => 'extModel4330-2',
              ),
              2 => 
              array (
                'key' => 'Engage',
                'value' => 'Engage',
                'id' => 'extModel4330-3',
              ),
              3 => 
              array (
                'key' => 'Park Avenue',
                'value' => 'Park Avenue',
                'id' => 'extModel4330-4',
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
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'Strenght',
             'title' => 'Strenght',
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
                'key' => 'Strong',
                'value' => 'Strong',
              ),
              1 => 
              array (
                'key' => 'Mild',
                'value' => 'Mild',
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
