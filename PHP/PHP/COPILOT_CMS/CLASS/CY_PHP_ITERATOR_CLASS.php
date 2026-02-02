<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_ITERATOR_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_ITERATOR_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_ITERATOR_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_ITERATOR_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_ITERATOR_CLASS',
            'family' => 'PHP_ITERATOR_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'Iterator', 'IteratorAggregate', 'Traversable',
            'ArrayIterator', 'RecursiveIterator',
            'RecursiveArrayIterator', 'RecursiveIteratorIterator',
            'FilterIterator', 'LimitIterator'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_ITERATOR_CLASSES',
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
