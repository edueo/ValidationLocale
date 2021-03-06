<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Christmas Island country subdivision.
 *
 * ISO 3166-1 alpha-2: CX
 *
 * @link http://www.geonames.org/CX/administrative-division-christmas-island.html
 */
class CxCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(null, '');

    public $compareIdentical = true;
}
