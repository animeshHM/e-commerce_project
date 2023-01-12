<?php

/**
 * Fields Summary:
 * - HeelHeight [select]
 * - Pattern [select]
 * - SoleMaterial [select]
 * - ToeShape [select]
 * - Occasion [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Heels',
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
             'name' => 'HeelHeight',
             'title' => 'Heel Height',
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
                'key' => '2inch',
                'value' => '2inch',
                'id' => 'extModel6133-1',
              ),
              1 => 
              array (
                'key' => '3inch',
                'value' => '3inch',
                'id' => 'extModel6133-2',
              ),
              2 => 
              array (
                'key' => '4inch',
                'value' => '4inch',
                'id' => 'extModel6133-3',
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
             'name' => 'Pattern',
             'title' => 'Pattern',
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
                'key' => 'Solid',
                'value' => 'Solid',
              ),
              1 => 
              array (
                'key' => 'Printed',
                'value' => 'Printed',
              ),
              2 => 
              array (
                'key' => 'Embellished',
                'value' => 'Embellished',
              ),
              3 => 
              array (
                'key' => 'Striped',
                'value' => 'Striped',
              ),
              4 => 
              array (
                'key' => 'Textured',
                'value' => 'Textured',
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
                'key' => 'EVA',
                'value' => 'EVA',
              ),
              1 => 
              array (
                'key' => 'PU',
                'value' => 'PU',
              ),
              2 => 
              array (
                'key' => 'Leather',
                'value' => 'Leather',
              ),
              3 => 
              array (
                'key' => 'TPU',
                'value' => 'TPU',
              ),
              4 => 
              array (
                'key' => 'Tunit',
                'value' => 'Tunit',
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
             'name' => 'ToeShape',
             'title' => 'Toe Shape',
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
                'key' => 'Open',
                'value' => 'Open',
              ),
              1 => 
              array (
                'key' => 'Peep',
                'value' => 'Peep',
              ),
              2 => 
              array (
                'key' => 'Round',
                'value' => 'Round',
              ),
              3 => 
              array (
                'key' => 'Square',
                'value' => 'Square',
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
             'name' => 'Occasion',
             'title' => 'Occasion',
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
                'key' => 'Party',
                'value' => 'Party',
              ),
              1 => 
              array (
                'key' => 'Formal',
                'value' => 'Formal',
              ),
              2 => 
              array (
                'key' => 'Ethnic',
                'value' => 'Ethnic',
              ),
              3 => 
              array (
                'key' => 'Casual',
                'value' => 'Casual',
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
