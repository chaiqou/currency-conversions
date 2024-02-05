<?php

use Chaiqou\CurrencyConversions\CurrencyConversionsClass;

it('can convert usd to gel', function () {
    $currency = CurrencyConversionsClass::currency(100)->convertToGEL();

    expect($currency)->toBe(265.0);

});


it('can convert usd to eur', function () {
    $currency = CurrencyConversionsClass::currency(100)->convertToEUR();

    expect($currency)->toBe(85.0);

});
