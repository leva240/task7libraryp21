<?php

namespace PizzaLibrary;

class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings = [];

    public function __construct(string $name, string $sauce, array $toppings = [])
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        $toppingsList = implode(', ', $this->toppings);
        echo "Добавлены топики: {$toppingsList}\n";
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}