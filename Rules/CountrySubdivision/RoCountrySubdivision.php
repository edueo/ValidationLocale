<?php

namespace Respect\Validation\Rules\CountrySubdivision;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validator for Romania country subdivision.
 *
 * ISO 3166-1 alpha-2: RO
 *
 * @link http://www.geonames.org/RO/administrative-division-romania.html
 */
class RoCountrySubdivision extends AbstractSearcher
{
    public $haystack = array(
        'AB', // Alba
        'AG', // Arges
        'AR', // Arad
        'B', // Bucuresti
        'BC', // Bacau
        'BH', // Bihor
        'BN', // Bistrita-Nasaud
        'BR', // Braila
        'BT', // Botosani
        'BV', // Brasov
        'BZ', // Buzau
        'CJ', // Cluj
        'CL', // Calarasi
        'CS', // Caras-Severin
        'CT', // Constanta
        'CV', // Covasna
        'DB', // Dimbovita
        'DJ', // Dolj
        'GJ', // Gorj
        'GL', // Galati
        'GR', // Giurgiu
        'HD', // Hunedoara
        'HR', // Harghita
        'IF', // Ilfov
        'IL', // Ialomita
        'IS', // Iasi
        'MH', // Mehedinti
        'MM', // Maramures
        'MS', // Mures
        'NT', // Neamt
        'OT', // Olt
        'PH', // Prahova
        'SB', // Sibiu
        'SJ', // Salaj
        'SM', // Satu Mare
        'SV', // Suceava
        'TL', // Tulcea
        'TM', // Timis
        'TR', // Teleorman
        'VL', // Vilcea
        'VN', // Vrancea
        'VS', // Vaslui
    );

    public $compareIdentical = true;
}
