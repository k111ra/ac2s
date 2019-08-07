<?php
namespace App\Traits;

/**
 * Created by PhpStorm.
 * User: MOMO
 * Date: 22/12/2016
 * Time: 11:45
 */

trait SanitizerTrait
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  string $input
     * @return string $response
     */
    public function sanitize($input)
    {
        return htmlentities($input);
    }

    public function sanitizeText($input)
    {
        return strip_tags(nl2br($input));
    }

    public function filterAccents($value)
    {
        $value = str_replace("'", "", $value);
        $value = htmlentities($value, ENT_NOQUOTES, 'utf-8');
        $value = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $value);
        //$value = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $value); // ligatures ex ''
        //$value = preg_replace('#\&[^;]+\;#', '', $value); // Autres Caracteres
        //$value = preg_replace('/\s/', '', $value); // Espaces

        return $value;
    }

    public static function removeAccents($value)
    {
        $value = str_replace("'", "", $value);
        $value = htmlentities($value, ENT_NOQUOTES, 'utf-8');
        $value = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $value);
        //$value = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $value); // ligatures ex ''
        //$value = preg_replace('#\&[^;]+\;#', '', $value); // Autres Caracteres
        //$value = preg_replace('/\s/', '', $value); // Espaces

        return $value;
    }

    /**
     * Allow only alphabets, spaces, numbers and dashes (hyphens and underscores)
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function validateAlphaNumDash($value) {
        return (bool) preg_match( "/^[A-Za-z_-][A-Za-z0-9_-]*$/", $value );
    }

}