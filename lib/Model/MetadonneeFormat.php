<?php
/**
 * MetadonneeFormat
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MGX
 *
 * MultiGest version 10
 *
 * The version of the OpenAPI document: canari-11
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MetadonneeFormat Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MetadonneeFormat
{
    /**
     * Possible values of this enum
     */
    public const TEXTE = 'texte';

    public const PARAGRAPHE = 'paragraphe';

    public const NUMERIQUE = 'numerique';

    public const DATE = 'date';

    public const BOOL = 'bool';

    public const ENUM = 'enum';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXTE,
            self::PARAGRAPHE,
            self::NUMERIQUE,
            self::DATE,
            self::BOOL,
            self::ENUM
        ];
    }
}


