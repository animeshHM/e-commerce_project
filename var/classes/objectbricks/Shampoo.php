<?php

/**
 * Fields Summary:
 * - HairType [select]
 * - KeyIngredients [select]
 * - Preference [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Shampoo',
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'HairType',
             'title' => 'Hair Type',
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
                'key' => 'CurlyHair',
                'value' => 'CurlyHair',
              ),
              1 => 
              array (
                'key' => 'DamagedHair',
                'value' => 'DamagedHair',
              ),
              2 => 
              array (
                'key' => 'Oily',
                'value' => 'Oily',
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
             'name' => 'KeyIngredients',
             'title' => 'Key Ingredients',
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
                'key' => 'Almond',
                'value' => 'Almond',
              ),
              1 => 
              array (
                'key' => 'Amla',
                'value' => 'Amla',
              ),
              2 => 
              array (
                'key' => 'Keratin',
                'value' => 'Keratin',
              ),
              3 => 
              array (
                'key' => 'Neem',
                'value' => 'Neem',
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
             'name' => 'Preference',
             'title' => 'Preference',
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
                'key' => 'AlcoholFree',
                'value' => 'AlcoholFree',
              ),
              1 => 
              array (
                'key' => 'Antioxidants',
                'value' => 'Antioxidants',
              ),
              2 => 
              array (
                'key' => 'FragranceFree',
                'value' => 'FragranceFree',
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
