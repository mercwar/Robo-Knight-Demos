<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_REFLECTION_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_REFLECTION_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_REFLECTION_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_REFLECTION_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_REFLECTION_CLASS',
            'family' => 'PHP_REFLECTION_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'ReflectionClass', 'ReflectionMethod', 'ReflectionFunction',
            'ReflectionProperty', 'ReflectionParameter',
            'ReflectionExtension', 'ReflectionObject',
            'ReflectionException'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_REFLECTION_CLASSES',
            'count'  => count(self::names()),
        ];
    }

    public static function full(): array
    {
        return [
            'identity' => self::identity(),
            'names'    => self::names(),
            'summary'  => self::summary(),
        ];
    }
}
?>
