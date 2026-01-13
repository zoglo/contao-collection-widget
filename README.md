<h1 align="center">Contao Collection Widget</h1>
<p align="center">
    <a href="https://github.com/zoglo/contao-collection-widget"><img src="https://img.shields.io/github/v/release/zoglo/contao-collection-widget" alt="github version"/></a>
    <a href="https://packagist.org/packages/zoglo/contao-collection-widget"><img src="https://img.shields.io/packagist/dt/zoglo/contao-collection-widget?color=f47c00" alt="amount of downloads"/></a>
    <a href="https://packagist.org/packages/zoglo/contao-collection-widget"><img src="https://img.shields.io/packagist/dependency-v/zoglo/contao-collection-widget/php?color=474A8A" alt="minimum php version"></a>
</p>

## Description

This bundle adds a widget that allows adding a collection of widgets. The data can be stored as a serialized array in the database.

## Installation

### Via composer

```
composer require zoglo/contao-collection-widget
```

## Configuration

```php
$GLOBALS['TL_DCA']['tl_content']['fields']['headline_test'] = [
    'search'                  => true,
    'inputType'               => 'collection',
    'fields' => [
        'value' => [
            'inputType'       => 'text',
            'eval'            => ['maxlength'=>200, 'basicEntities'=>true]
        ],
        'unit' => [
            'inputType'       => 'select',
            'options'         => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']
        ],
    ],
    'eval' => ['tl_class'=>'w50 clr'],
    'sql' => [
        'type' => 'string',
        'length' => '255',
        'notnull' => true,
    ],
];
```
