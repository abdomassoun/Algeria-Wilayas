<?php

namespace Abdo\AlgeriaWilayas\Enums;

use Abdo\AlgeriaWilaya\Services\AlgeriaWilayaService;

/**
 * Represents the enumeration of Wilayas (provinces) in Algeria.
 */
enum Wilaya: int
{
    /**
     * Adrar province.
     */
    case Adrar = 1;

    /**
     * Chlef province.
     */
    case Chlef = 2;

    /**
     * Laghouat province.
     */
    case Laghouat = 3;

    // ... (remaining cases omitted for brevity)

    /**
     * InGuezzam province.
     */
    case InGuezzam = 58;

    /**
     * Retrieves the code of the Wilaya.
     *
     * @return string The code of the Wilaya.
     */
    public function getCode(): string
    {
        return AlgeriaWilayaService::getValueOf($this->value, 'code');
    }

    /**
     * Retrieves the name of the Wilaya based on the provided code.
     *
     * @param int $Wilaya_code The code of the Wilaya.
     * @return string The name of the Wilaya.
     */
    public function getName(int $Wilaya_code): string
    {
        return AlgeriaWilayaService::getValueOf($Wilaya_code, 'name');
    }

    /**
     * Retrieves the Arabic name of the Wilaya based on the provided code.
     *
     * @param int $willaya_code The code of the Wilaya.
     * @return string The Arabic name of the Wilaya.
     */
    public function getArabicName(int $willaya_code): string
    {
        return AlgeriaWilayaService::getValueOf($willaya_code, 'arabic_name');
    }

    /**
     * Retrieves the longitude of the Wilaya based on the provided code.
     *
     * @param int $willaya_code The code of the Wilaya.
     * @return string The longitude of the Wilaya.
     */
    public function getLongitude(int $willaya_code): string
    {
        return AlgeriaWilayaService::getValueOf($willaya_code, 'longitude');
    }

    /**
     * Retrieves the latitude of the Wilaya based on the provided code.
     *
     * @param int $willaya_code The code of the Wilaya.
     * @return string The latitude of the Wilaya.
     */
    public function getLatitude(int $willaya_code): string
    {
        return AlgeriaWilayaService::getValueOf($willaya_code, 'latitude');
    }
}
