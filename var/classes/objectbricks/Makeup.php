<?php

/**
 * Fields Summary:
 * - Brands [multiselect]
 * - EyeMakeup [multiselect]
 * - Shades [multiselect]
 * - Features [select]
 * - EyeFinish [multiselect]
 * - LipMakeup [multiselect]
 * - Formulations [multiselect]
 * - LipstikFinish [multiselect]
 * - Pigmentation [select]
 * - ColourFamily [multiselect]
 * - FaceMakeup [multiselect]
 * - MakeupType [select]
 * - SkinTone [select]
 * - Finish [select]
 * - SkinType [select]
 * - ColourShadeName [multiselect]
 * - Coverage [select]
 * - ShadeName [select]
 * - GlitterFinish [select]
 * - Preference [multiselect]
 * - Formulation [multiselect]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Makeup',
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
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'CommonAttributes',
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
                 'name' => 'Brands',
                 'title' => 'Brands',
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
                    'key' => 'Lakme',
                    'value' => 'Lakme',
                  ),
                  1 => 
                  array (
                    'key' => 'Colorbar',
                    'value' => 'Colorbar',
                  ),
                  2 => 
                  array (
                    'key' => 'Sugar',
                    'value' => 'Sugar',
                  ),
                  3 => 
                  array (
                    'key' => 'Mac',
                    'value' => 'Mac',
                  ),
                  4 => 
                  array (
                    'key' => 'Revlon',
                    'value' => 'Revlon',
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
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'EyeMakeup',
             'type' => NULL,
             'region' => NULL,
             'title' => 'EyeMakeup',
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
                 'name' => 'EyeMakeup',
                 'title' => 'Eye Makeup',
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
                    'key' => 'Eye liner',
                    'value' => 'Eye liner',
                  ),
                  1 => 
                  array (
                    'key' => 'Kajol',
                    'value' => 'Kajol',
                  ),
                  2 => 
                  array (
                    'key' => 'Mascara',
                    'value' => 'Mascara',
                  ),
                  3 => 
                  array (
                    'key' => 'Eye shadow',
                    'value' => 'Eye shadow',
                  ),
                  4 => 
                  array (
                    'key' => 'Eyebrow pencil',
                    'value' => 'Eyebrow pencil',
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
                 'name' => 'Shades',
                 'title' => 'Shades',
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
                    'key' => 'Black',
                    'value' => 'Black',
                  ),
                  1 => 
                  array (
                    'key' => 'Blue',
                    'value' => 'Blue',
                  ),
                  2 => 
                  array (
                    'key' => 'Brown',
                    'value' => 'Brown',
                  ),
                  3 => 
                  array (
                    'key' => 'Gold',
                    'value' => 'Gold',
                  ),
                  4 => 
                  array (
                    'key' => 'Green',
                    'value' => 'Green',
                  ),
                  5 => 
                  array (
                    'key' => 'Grey',
                    'value' => 'Grey',
                  ),
                  6 => 
                  array (
                    'key' => 'Multicolor',
                    'value' => 'Multicolor',
                  ),
                  7 => 
                  array (
                    'key' => 'Nude',
                    'value' => 'Nude',
                  ),
                  8 => 
                  array (
                    'key' => 'Pink',
                    'value' => 'Pink',
                  ),
                  9 => 
                  array (
                    'key' => 'Purple',
                    'value' => 'Purple',
                  ),
                  10 => 
                  array (
                    'key' => 'Red',
                    'value' => 'Red',
                  ),
                  11 => 
                  array (
                    'key' => 'Silver',
                    'value' => 'Silver',
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
                 'name' => 'Features',
                 'title' => 'Features',
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
                    'key' => 'Long lasting',
                    'value' => 'Long lasting',
                  ),
                  1 => 
                  array (
                    'key' => 'Sweat proof',
                    'value' => 'Sweat proof',
                  ),
                  2 => 
                  array (
                    'key' => 'Waterproof',
                    'value' => 'Waterproof',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                 'name' => 'EyeFinish',
                 'title' => 'Eye Finish',
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
                    'key' => 'Glitter',
                    'value' => 'Glitter',
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
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'LipMakeup',
             'type' => NULL,
             'region' => NULL,
             'title' => 'LipMakeup',
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
                 'name' => 'LipMakeup',
                 'title' => 'Lip Makeup',
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
                    'key' => 'Lip balm',
                    'value' => 'Lip balm',
                  ),
                  1 => 
                  array (
                    'key' => 'Lipstick',
                    'value' => 'Lipstick',
                  ),
                  2 => 
                  array (
                    'key' => 'Lip liner',
                    'value' => 'Lip liner',
                  ),
                  3 => 
                  array (
                    'key' => 'Lip plumer',
                    'value' => 'Lip plumer',
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
                 'name' => 'Formulations',
                 'title' => 'Formulations',
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
                    'key' => 'Bullet',
                    'value' => 'Bullet',
                  ),
                  1 => 
                  array (
                    'key' => 'Crayon',
                    'value' => 'Crayon',
                  ),
                  2 => 
                  array (
                    'key' => 'Liquid',
                    'value' => 'Liquid',
                  ),
                  3 => 
                  array (
                    'key' => 'Palette',
                    'value' => 'Palette',
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
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'Pigmentation',
                 'title' => 'Pigmentation',
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
                    'key' => 'Full coverage',
                    'value' => 'Full coverage',
                  ),
                  1 => 
                  array (
                    'key' => 'Low coverage',
                    'value' => 'Low coverage',
                  ),
                  2 => 
                  array (
                    'key' => 'Medium coverage',
                    'value' => 'Medium coverage',
                  ),
                  3 => 
                  array (
                    'key' => 'Sheer',
                    'value' => 'Sheer',
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
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'FaceMakeup',
             'type' => NULL,
             'region' => NULL,
             'title' => 'FaceMakeup',
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
                 'name' => 'FaceMakeup',
                 'title' => 'Face Makeup',
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
                    'key' => 'Primer',
                    'value' => 'Primer',
                  ),
                  1 => 
                  array (
                    'key' => 'Concealer',
                    'value' => 'Concealer',
                  ),
                  2 => 
                  array (
                    'key' => 'Foundation',
                    'value' => 'Foundation',
                  ),
                  3 => 
                  array (
                    'key' => 'Blush',
                    'value' => 'Blush',
                  ),
                  4 => 
                  array (
                    'key' => 'Highlighter',
                    'value' => 'Highlighter',
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'name' => '',
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
                     'name' => 'MakeupType',
                     'title' => 'Makeup Type',
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
                        'key' => 'Primer',
                        'value' => 'Primer',
                      ),
                      1 => 
                      array (
                        'key' => 'Foundation',
                        'value' => 'Foundation',
                      ),
                      2 => 
                      array (
                        'key' => 'Concealer',
                        'value' => 'Concealer',
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
                     'name' => 'SkinTone',
                     'title' => 'Skin Tone',
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
                        'key' => 'Dark to deep',
                        'value' => 'Dark to deep',
                      ),
                      1 => 
                      array (
                        'key' => 'Fair to light',
                        'value' => 'Fair to light',
                      ),
                      2 => 
                      array (
                        'key' => 'Light to medium',
                        'value' => 'Light to medium',
                      ),
                      3 => 
                      array (
                        'key' => 'Medium to dark',
                        'value' => 'Medium to dark',
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
                     'name' => 'Finish',
                     'title' => 'Finish',
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
                        'key' => 'Dewy',
                        'value' => 'Dewy',
                      ),
                      1 => 
                      array (
                        'key' => 'Illuminating',
                        'value' => 'Illuminating',
                      ),
                      2 => 
                      array (
                        'key' => 'Luminous',
                        'value' => 'Luminous',
                      ),
                      3 => 
                      array (
                        'key' => 'Matte',
                        'value' => 'Matte',
                      ),
                      4 => 
                      array (
                        'key' => 'Natural',
                        'value' => 'Natural',
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
                     'name' => 'SkinType',
                     'title' => 'Skin Type',
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
                        'key' => 'Combination',
                        'value' => 'Combination',
                      ),
                      1 => 
                      array (
                        'key' => 'Dry',
                        'value' => 'Dry',
                      ),
                      2 => 
                      array (
                        'key' => 'Normal',
                        'value' => 'Normal',
                      ),
                      3 => 
                      array (
                        'key' => 'Oily',
                        'value' => 'Oily',
                      ),
                      4 => 
                      array (
                        'key' => 'Sensitive',
                        'value' => 'Sensitive',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                     'name' => 'ColourShadeName',
                     'title' => 'Colour Shade Name',
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
                        'key' => 'Beige',
                        'value' => ' Beige',
                      ),
                      1 => 
                      array (
                        'key' => 'Natural',
                        'value' => 'Natural',
                      ),
                      2 => 
                      array (
                        'key' => 'Neutral',
                        'value' => 'Neutral',
                      ),
                      3 => 
                      array (
                        'key' => 'White Ivory',
                        'value' => ' White Ivory',
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
                  5 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                     'name' => 'Coverage',
                     'title' => 'Coverage',
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
                        'key' => 'Full coverage',
                        'value' => 'Full coverage',
                      ),
                      1 => 
                      array (
                        'key' => 'Medium coverage',
                        'value' => 'Medium coverage',
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
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'name' => 'Blush&Highlighter',
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
                     'name' => 'ShadeName',
                     'title' => 'Shade Name',
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
                        'key' => 'Coral rush',
                        'value' => 'Coral rush',
                      ),
                      1 => 
                      array (
                        'key' => 'Floral pink',
                        'value' => 'Floral pink',
                      ),
                      2 => 
                      array (
                        'key' => 'Deep plump',
                        'value' => 'Deep plump',
                      ),
                      3 => 
                      array (
                        'key' => 'Golden pink',
                        'value' => 'Golden pink',
                      ),
                      4 => 
                      array (
                        'key' => 'Sweet pink',
                        'value' => 'Sweet pink',
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
                     'name' => 'GlitterFinish',
                     'title' => 'Glitter Finish',
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
                        'key' => 'Glossy',
                        'value' => 'Glossy',
                      ),
                      1 => 
                      array (
                        'key' => 'Illuminating',
                        'value' => 'Illuminating',
                      ),
                      2 => 
                      array (
                        'key' => 'Luminous',
                        'value' => 'Luminous',
                      ),
                      3 => 
                      array (
                        'key' => 'Shimmer',
                        'value' => 'Shimmer',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
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
                        'key' => 'Allergy free',
                        'value' => 'Allergy free',
                      ),
                      1 => 
                      array (
                        'key' => 'Cruelty free',
                        'value' => 'Cruelty free',
                      ),
                      2 => 
                      array (
                        'key' => 'Natural',
                        'value' => 'Natural',
                      ),
                      3 => 
                      array (
                        'key' => 'Silicon free',
                        'value' => 'Silicon free',
                      ),
                      4 => 
                      array (
                        'key' => 'Vegan',
                        'value' => 'Vegan',
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
                      ),
                      1 => 
                      array (
                        'key' => 'Gel',
                        'value' => 'Gel',
                      ),
                      2 => 
                      array (
                        'key' => 'Powder',
                        'value' => 'Powder',
                      ),
                      3 => 
                      array (
                        'key' => 'Stick',
                        'value' => 'Stick',
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
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
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
      'fieldname' => 'Makeup',
    ),
  ),
));
