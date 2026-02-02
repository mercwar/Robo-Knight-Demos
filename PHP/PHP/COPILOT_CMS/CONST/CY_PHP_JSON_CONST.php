<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_JSON_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_JSON_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_JSON_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP JSON constants.
=====================================================================*/

class CY_PHP_JSON_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_JSON_CONST',
            'family' => 'PHP_JSON_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'JSON_HEX_TAG',
            'JSON_HEX_AMP',
            'JSON_HEX_APOS',
            'JSON_HEX_QUOT',
            'JSON_FORCE_OBJECT',
            'JSON_NUMERIC_CHECK',
            'JSON_UNESCAPED_SLASHES',
            'JSON_PRETTY_PRINT',
            'JSON_UNESCAPED_UNICODE',
            'JSON_PARTIAL_OUTPUT_ON_ERROR',
            'JSON_PRESERVE_ZERO_FRACTION',
            'JSON_UNESCAPED_LINE_TERMINATORS',
            'JSON_THROW_ON_ERROR',
            'JSON_ERROR_NONE',
            'JSON_ERROR_DEPTH',
            'JSON_ERROR_STATE_MISMATCH',
            'JSON_ERROR_CTRL_CHAR',
            'JSON_ERROR_SYNTAX',
            'JSON_ERROR_UTF8',
            'JSON_ERROR_RECURSION',
            'JSON_ERROR_INF_OR_NAN',
            'JSON_ERROR_UNSUPPORTED_TYPE',
            'JSON_ERROR_INVALID_PROPERTY_NAME',
            'JSON_ERROR_UTF16',
        ];
    }

    public static function map(): array
    {
        $m = [];
        foreach (self::names() as $n) if (defined($n)) $m[$n] = constant($n);
        return $m;
    }

    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'names'    => self::names(),
            'map'      => self::map(),
        ];
    }
}
?>
