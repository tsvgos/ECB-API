<?php

namespace Richardds\ECBAPI;

/**
 * Class Currency
 * @package Richardds\ECBAPI
 */
class Currency
{
    /**
     * Available ECB currencies
     */
    const CURRENCY_NAME_TABLE = [
        'EUR' => '',
        'USD' => '',
        'JPY' => '',
        'BGN' => '',
        'CZK' => '',
        'DKK' => '',
        'GBP' => '',
        'HUF' => '',
        'PLN' => '',
        'RON' => '',
        'SEK' => '',
        'CHF' => '',
        'NOK' => '',
        'HRK' => '',
        'RUB' => '',
        'TRY' => '',
        'AUD' => '',
        'BRL' => '',
        'CAD' => '',
        'CNY' => '',
        'HKD' => '',
        'IDR' => '',
        'ILS' => '',
        'INR' => '',
        'KRW' => '',
        'MXN' => '',
        'MYR' => '',
        'NZD' => '',
        'PHP' => '',
        'SGD' => '',
        'THB' => '',
        'ZAR' => ''
    ];

    /**
     * @var string
     */
    private $code;

    /**
     * @var int
     */
    private $rate;

    /**
     * Currency constructor.
     *
     * @param string $code
     * @param int $rate
     */
    public function __construct(string $code, $rate)
    {
        $this->code = $code;
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::CURRENCY_NAME_TABLE[$this->code] ?? '';
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}
