<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for India country subdivision.
 *
 * ISO 3166-1 alpha-2: IN
 *
 * @link http://www.geonames.org/IN/administrative-division-india.html
 */
class InCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AN', // Andaman and Nicobar Islands
        'AP', // Andhra Pradesh
        'AR', // Arunachal Pradesh
        'AS', // Assam
        'BR', // Bihar
        'CH', // Chandigarh
        'CT', // Chhattisgarh
        'DD', // Daman and Diu
        'DL', // Delhi
        'DN', // Dadra and Nagar Haveli
        'GA', // Goa
        'GJ', // Gujarat
        'HP', // Himachal Pradesh
        'HR', // Haryana
        'JH', // Jharkhand
        'JK', // Jammu and Kashmir
        'KA', // Karnataka
        'KL', // Kerala
        'LD', // Lakshadweep
        'MH', // Maharashtra
        'ML', // Meghalaya
        'MN', // Manipur
        'MP', // Madhya Pradesh
        'MZ', // Mizoram
        'NL', // Nagaland
        'OR', // Orissa
        'PB', // Punjab
        'PY', // Pondicherry
        'RJ', // Rajasthan
        'SK', // Sikkim
        'TN', // Tamil Nadu
        'TR', // Tripura
        'UL', // Uttaranchal
        'UP', // Uttar Pradesh
        'WB', // West Bengal
    );

    public $compareIdentical = true;
}
