<?php

use Chaiqou\CurrencyConversions\CurrencyConversionsClass;

it('can convert usd to gel', function () {
    $currency = CurrencyConversionsClass::currency(100)->convertToGEL();

    expect($currency)->toBe(265.0);

});
