<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_MISC_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_MISC_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_MISC_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_MISC_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_MISC_CLASS',
            'family' => 'PHP_MISC_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'stdClass', 'Closure', 'Generator', 'WeakReference',
            'WeakMap', 'Fiber'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_MISC_CLASSES',
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
