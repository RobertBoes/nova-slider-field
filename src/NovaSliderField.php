<?php

namespace Robertboes\NovaSliderField;

use Laravel\Nova\Fields\Field;

class NovaSliderField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-slider-field';

    /**
     * Set the minimum value, defaults to 0
     * @param float $min
     * @return NovaSliderField
     */
    public function min(float $min)
    {
        return $this->withMeta(['min' => $min]);
    }

    /**
     * Set the maximum value, defaults to 100
     * @param float $max
     * @return NovaSliderField
     */
    public function max(float $max)
    {
        return $this->withMeta(['max' => $max]);
    }

    /**
     * Set the interval of which the slider should increment/decrement, default is 1
     * @param float $interval
     * @return NovaSliderField
     */
    public function interval(float $interval)
    {
        return $this->withMeta(['interval' => $interval]);
    }

    /**
     * Don't show a tooltip on the detail page
     * @return NovaSliderField
     */
    public function withoutTooltip()
    {
        return $this->withMeta(['tooltip' => false]);
    }

    /**
     * Show a tooltip on hover on the detail page
     * @return NovaSliderField
     */
    public function tooltipOnHover()
    {
        return $this->withMeta(['tooltip' => 'hover']);
    }

    /**
     * Custom formatter for the text in the tooltip
     * @param string $formatter The format to use, for example "{value} %"
     * @return NovaSliderField
     */
    public function formatter(string $formatter)
    {
        return $this->withMeta(['formatter' => $formatter]);
    }
}
