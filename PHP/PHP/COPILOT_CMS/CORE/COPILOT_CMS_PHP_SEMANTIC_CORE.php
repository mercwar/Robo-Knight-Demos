<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PHP_SEMANTIC_CORE
    AVIS-ID: COPILOT_CMS.SEMANTIC.CORE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CORE/COPILOT_CMS_PHP_SEMANTIC_CORE.php
    AVIS-TYPE: SEMANTIC_CORE
    AVIS-DESCRIPTION:
        Unified semantic registry for PHP constants, functions, and classes.
        Provides deterministic lookup, enumeration, and subsystem summary.
        Pure, immutable, side-effect free.
=====================================================================*/

class COPILOT_CMS_PHP_SEMANTIC_CORE
{
    /*=============================================================
        IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'id'      => 'COPILOT_CMS.SEMANTIC.CORE',
            'version' => '1.0.0',
            'domains' => [
                'constants' => 'CY_PHP_CONST_INDEX',
                'functions' => 'CY_PHP_FUNC_INDEX',
                'classes'   => 'CY_PHP_CLASS_INDEX',
            ],
        ];
    }

    /*=============================================================
        LOADERS
        Each loader delegates to the appropriate master index.
    ==============================================================*/
    public static function constants(string $family): array
    {
        if (!class_exists('CY_PHP_CONST_INDEX')) {
            return ['error' => 'Constant index not loaded'];
        }
        return CY_PHP_CONST_INDEX::load($family);
    }

    public static function functions(string $family): array
    {
        if (!class_exists('CY_PHP_FUNC_INDEX')) {
            return ['error' => 'Function index not loaded'];
        }
        return CY_PHP_FUNC_INDEX::load($family);
    }

    public static function classes(string $family): array
    {
        if (!class_exists('CY_PHP_CLASS_INDEX')) {
            return ['error' => 'Class index not loaded'];
        }
        return CY_PHP_CLASS_INDEX::load($family);
    }

    /*=============================================================
        SUMMARY
        Returns a unified summary of all semantic domains.
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'identity'  => self::identity(),
            'constants' => class_exists('CY_PHP_CONST_INDEX')
                ? CY_PHP_CONST_INDEX::summary()
                : ['error' => 'Constant index not loaded'],

            'functions' => class_exists('CY_PHP_FUNC_INDEX')
                ? CY_PHP_FUNC_INDEX::summary()
                : ['error' => 'Function index not loaded'],

            'classes'   => class_exists('CY_PHP_CLASS_INDEX')
                ? CY_PHP_CLASS_INDEX::summary()
                : ['error' => 'Class index not loaded'],
        ];
    }

    /*=============================================================
        FULL PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'  => self::identity(),
            'summary'   => self::summary(),
        ];
    }
}
?>
