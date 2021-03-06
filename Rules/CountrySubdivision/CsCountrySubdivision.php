<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Serbia And Montenegro country subdivision.
 *
 * ISO 3166-1 alpha-2: CS
 *
 * @link http://www.geonames.org/CS/administrative-division-serbia-and-montenegro.html
 */
class CsCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'KOS', // Kosovo
        'MON', // Montenegro
        'SER', // Serbia
        'VOJ', // Vojvodina
    );

    public $compareIdentical = true;
}
