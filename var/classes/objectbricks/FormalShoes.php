<?php

/**
 * Fields Summary:
 * - ToeShape [select]
 * - Pattern [select]
 * - Materials [select]
 * - ShoeType [select]
 * - Size [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'FormalShoes',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Footwear',
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
                'key' => 'Pointed',
                'value' => 'Pointed',
              ),
              1 => 
              array (
                'key' => 'Round',
                'value' => 'Rounded',
              ),
              2 => 
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
                'key' => 'Textured',
                'value' => 'Textured',
              ),
              2 => 
              array (
                'key' => 'Woven Design',
                'value' => 'Woven Design',
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
             'name' => 'Materials',
             'title' => 'Materials',
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
                'key' => 'Leather',
                'value' => 'Leather',
              ),
              1 => 
              array (
                'key' => 'PU',
                'value' => 'PU',
              ),
              2 => 
              array (
                'key' => 'Synthetic',
                'value' => 'Synthetic',
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
             'name' => 'ShoeType',
             'title' => 'Shoe Type',
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
                'key' => 'Boots',
                'value' => 'Boots',
              ),
              1 => 
              array (
                'key' => 'Loafers',
                'value' => 'Loafers',
              ),
              2 => 
              array (
                'key' => 'Oxfords',
                'value' => 'Oxfords',
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
      'fieldname' => 'FootwearProduct',
    ),
  ),
));
