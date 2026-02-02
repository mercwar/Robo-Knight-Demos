<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_INTL_FORMATTING_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_INTL_FORMATTING_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_INTL_FORMATTING_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP intl formatting constants.
=====================================================================*/

class CY_PHP_INTL_FORMATTING_CONST
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CONST.CY_PHP_INTL_FORMATTING_CONST',
            'family' => 'PHP_INTL_FORMATTING_CONSTANTS',
        ];
    }

    public static function names(): array
    {
        return [
            'NumberFormatter::DECIMAL',
            'NumberFormatter::CURRENCY',
            'NumberFormatter::PERCENT',
            'NumberFormatter::SCIENTIFIC',
            'NumberFormatter::SPELLOUT',
            'NumberFormatter::ORDINAL',
            'NumberFormatter::DURATION',
        ];
    }

    public static function map(): array
    {
        $map = [];
        foreach (self::names() as $n) {
            if (defined($n)) $map[$n] = constant($n);
        }
        return $map;
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
