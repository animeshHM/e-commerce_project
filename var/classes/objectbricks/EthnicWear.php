<?php

/**
 * Fields Summary:
 * - item [select]
 * - size [select]
 * - fabric [select]
 * - pattern [select]
 * - brand [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'EthnicWear',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Clothing',
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
             'name' => 'item',
             'title' => 'Item',
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
                'key' => 'Saree',
                'value' => 'Saree',
              ),
              1 => 
              array (
                'key' => 'Kurta Pyjama Set',
                'value' => 'Kurta Pyjama Set',
              ),
              2 => 
              array (
                'key' => 'Salwar Kameez Suit',
                'value' => 'Salwar Kameez Suit',
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
             'name' => 'size',
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
                'key' => 'XS',
                'value' => 'XS',
              ),
              1 => 
              array (
                'key' => 'S',
                'value' => 'S',
              ),
              2 => 
              array (
                'key' => 'M',
                'value' => 'M',
              ),
              3 => 
              array (
                'key' => 'L',
                'value' => 'L',
              ),
              4 => 
              array (
                'key' => 'XL',
                'value' => 'XL',
              ),
              5 => 
              array (
                'key' => 'XXL',
                'value' => 'XXL',
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
             'name' => 'fabric',
             'title' => 'Fabric',
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
                'key' => 'Cotton',
                'value' => 'Cotton',
              ),
              1 => 
              array (
                'key' => 'Silk',
                'value' => 'Silk',
              ),
              2 => 
              array (
                'key' => 'Blended',
                'value' => 'Blended',
              ),
              3 => 
              array (
                'key' => 'Chiffon',
                'value' => 'Chiffon',
              ),
              4 => 
              array (
                'key' => 'Georgette',
                'value' => 'Georgette',
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
             'name' => 'pattern',
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
                'key' => 'Chikankari',
                'value' => 'Chikankari',
              ),
              1 => 
              array (
                'key' => 'Sanganeri',
                'value' => 'Sanganeri',
              ),
              2 => 
              array (
                'key' => 'Kathyawadi',
                'value' => 'Kathyawadi',
              ),
              3 => 
              array (
                'key' => 'Bandhani',
                'value' => 'Bandhani',
              ),
              4 => 
              array (
                'key' => 'Paithani',
                'value' => 'Paithani',
              ),
              5 => 
              array (
                'key' => 'Anarkali',
                'value' => 'Anarkali',
              ),
              6 => 
              array (
                'key' => 'Pashmina',
                'value' => 'Pashmina',
              ),
              7 => 
              array (
                'key' => 'Churidaar',
                'value' => 'Churidaar',
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
             'name' => 'brand',
             'title' => 'Brand',
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
                'key' => 'BIba',
                'value' => 'BIba',
              ),
              1 => 
              array (
                'key' => 'Libas',
                'value' => 'Libas',
              ),
              2 => 
              array (
                'key' => 'Anouk',
                'value' => 'Anouk',
              ),
              3 => 
              array (
                'key' => 'Aakriti',
                'value' => 'Aakriti',
              ),
              4 => 
              array (
                'key' => 'Global Desi',
                'value' => 'Global Desi',
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
      'classname' => 'Clothing',
      'fieldname' => 'clothingItem',
    ),
  ),
));
