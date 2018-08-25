<?php

class customer {
    private $name = 'John Doe';

    public function getName()
    {
        return $this->name;
    }
}

$customer = new customer();

$accessor = Closure::bind(function ($newValue) {
    $this->name = $newValue;
}, $customer, customer::class);

$accessor('Robert');

echo $customer->getName();
