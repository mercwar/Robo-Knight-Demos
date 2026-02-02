<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_ERROR_FUNC
    AVIS-ID: COPILOT_CMS.FUNC.CY_PHP_ERROR_FUNC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/FUNC/CY_PHP_ERROR_FUNC.php
    AVIS-TYPE: FUNC_REGISTRY
=====================================================================*/

class CY_PHP_ERROR_FUNC
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.FUNC.CY_PHP_ERROR_FUNC',
            'family' => 'PHP_ERROR_FUNCTIONS',
        ];
    }

    public static function names(): array
    {
        return [
            'error_reporting', 'set_error_handler', 'restore_error_handler',
            'set_exception_handler', 'restore_exception_handler',
            'trigger_error', 'debug_backtrace', 'debug_print_backtrace'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_ERROR_FUNCTIONS',
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
