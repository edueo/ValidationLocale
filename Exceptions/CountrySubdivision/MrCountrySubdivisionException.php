<?php

namespace Respect\Validation\Exceptions\CountrySubdivision;

use Respect\Validation\Exceptions\CountrySubdivisionException;

/**
 * Exception class for Mauritania country subdivision.
 *
 * ISO 3166-1 alpha-2: MR
 */
class MrCountrySubdivisionException extends CountrySubdivisionException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must be a country subdivision of Mauritania',
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not be a country subdivision of Mauritania',
        ),
    );
}
