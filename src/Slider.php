<?php
declare(strict_types=1);

namespace Robertboes\NovaSliderField;

use Laravel\Nova\Fields\Field;

class Slider extends Field
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
     * @return Slider
     */
    public function min(float $min): self
    {
        return $this->withMeta(['min' => $min]);
    }

    /**
     * Set the maximum value, defaults to 100
     * @param float $max
     * @return Slider
     */
    public function max(float $max): self
    {
        return $this->withMeta(['max' => $max]);
    }

    /**
     * Set the interval of which the slider should increment/decrement, default is 1
     * @param float $interval
     * @return Slider
     */
    public function interval(float $interval): self
    {
        return $this->withMeta(['interval' => $interval]);
    }

    /**
     * Don't show a tooltip on the detail page
     * @return Slider
     */
    public function withoutTooltip(): self
    {
        return $this->withMeta(['tooltip' => false]);
    }

    /**
     * Show a tooltip on hover on the detail page
     * @return Slider
     */
    public function tooltipOnHover(): self
    {
        return $this->withMeta(['tooltip' => 'hover']);
    }

    /**
     * Custom formatter for the text in the tooltip
     * @param string $formatter The format to use, for example "{value} %"
     * @return Slider
     */
    public function formatter(string $formatter): self
    {
        return $this->withMeta(['formatter' => $formatter]);
    }
}
