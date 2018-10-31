# Nova Slider Field
A Laravel Nova slider field using [NightCatSama/vue-slider-component](https://github.com/NightCatSama/vue-slider-component)

# Installation

Install the package with composer using the following command:

```bash
composer require robertboes/nova-slider-field
```

# Usage

Add the field to your nova model:

```php
NovaSliderField::make('Percentage');
```

## Field options

- [min](#min)
- [max](#max)
- [interval](#interval)
- [withoutTooltip](#withoutTooltip)
- [tooltipOnHover](#tooltipOnHover)
- [formatter](#formatter)

### min
```php
NovaSliderField::make('Percentage')->min(50);
```
Sets the minimum value, defaults to 0.

### max
```php
NovaSliderField::make('Percentage')->min(200);
```
Set the maximum value, defaults to 100.

### interval
```php
NovaSliderField::make('Percentage')->interval(5);
```
Set the interval of which the slider should increment/decrement, default is 1.

### withoutTooltip
```php
NovaSliderField::make('Percentage')->withoutTooltip();
```
Don't show a tooltip on the detail page.

### tooltipOnHover
```php
NovaSliderField::make('Percentage')->tooltipOnHover();
```
Show a tooltip on hover on the detail page.

### formatter
```php
NovaSliderField::make('Percentage')->formatter(50);
```
Custom formatter for the text in the tooltip.
This is a string which has to contain `{value}`, for example `{value} %`

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
