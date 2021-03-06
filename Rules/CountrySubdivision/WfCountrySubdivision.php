<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Wallis and Futuna country subdivision.
 *
 * ISO 3166-1 alpha-2: WF
 *
 * @link http://www.geonames.org/WF/administrative-division-wallis-and-futuna.html
 */
class WfCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'A', // Alo
        'S', // Sigave
        'W', // ʻUvea
    );

    public $compareIdentical = true;
}
