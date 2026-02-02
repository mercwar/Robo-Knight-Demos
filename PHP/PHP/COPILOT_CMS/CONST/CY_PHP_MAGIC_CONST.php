<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_MAGIC_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHP_MAGIC_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHP_MAGIC_CONST.php
    AVIS-TYPE: CONST_REGISTRY
    AVIS-DESCRIPTION:
        Registry of PHP magic constants.
        These are context-dependent and resolved at compile time.
        Here we only describe their names and current resolved values.
        No I/O, no globals, no mutation.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
=====================================================================*/

class CY_PHP_MAGIC_CONST
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.CONST.CY_PHP_MAGIC_CONST',
            'family'    => 'PHP_MAGIC_CONSTANTS',
            'version'   => '1.0.0',
            'subsystem' => 'COPILOT_CMS_CONST',
        ];
    }

    public static function names(): array
    {
        return [
            '__LINE__',
            '__FILE__',
            '__DIR__',
            '__FUNCTION__',
            '__CLASS__',
            '__TRAIT__',
            '__METHOD__',
            '__NAMESPACE__',
        ];
    }

    public static function map(): array
    {
        // Values are context-dependent; this map reflects the context
        // of this file at the time of evaluation.
        return [
            '__LINE__'      => __LINE__,
            '__FILE__'      => __FILE__,
            '__DIR__'       => __DIR__,
            '__FUNCTION__'  => __FUNCTION__,
            '__CLASS__'     => __CLASS__,
            '__TRAIT__'     => __TRAIT__,
            '__METHOD__'    => __METHOD__,
            '__NAMESPACE__' => __NAMESPACE__,
        ];
    }

    public static function summary(): array
    {
        return [
            'count'  => count(self::names()),
            'family' => 'PHP_MAGIC_CONSTANTS',
        ];
    }

    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'names'    => self::names(),
            'map'      => self::map(),
            'summary'  => self::summary(),
        ];
    }
}
?>
