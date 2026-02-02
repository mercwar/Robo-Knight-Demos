<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SPL_EXCEPTION_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_SPL_EXCEPTION_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_SPL_EXCEPTION_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_SPL_EXCEPTION_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_SPL_EXCEPTION_CLASS',
            'family' => 'PHP_SPL_EXCEPTION_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'SplException', 'BadFunctionCallException',
            'BadMethodCallException', 'LogicException',
            'RuntimeException', 'OutOfBoundsException',
            'OutOfRangeException', 'OverflowException',
            'UnderflowException', 'UnexpectedValueException'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_SPL_EXCEPTION_CLASSES',
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
