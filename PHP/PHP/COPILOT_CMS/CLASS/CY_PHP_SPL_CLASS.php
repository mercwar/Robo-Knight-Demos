<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHP_SPL_CLASS
    AVIS-ID: COPILOT_CMS.CLASS.CY_PHP_SPL_CLASS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CLASS/CY_PHP_SPL_CLASS.php
    AVIS-TYPE: CLASS_REGISTRY
=====================================================================*/

class CY_PHP_SPL_CLASS
{
    public static function identity(): array
    {
        return [
            'id'     => 'COPILOT_CMS.CLASS.CY_PHP_SPL_CLASS',
            'family' => 'PHP_SPL_CLASSES',
        ];
    }

    public static function names(): array
    {
        return [
            'SplStack', 'SplQueue', 'SplDoublyLinkedList',
            'SplFixedArray', 'SplObjectStorage', 'SplPriorityQueue',
            'SplFileObject', 'SplTempFileObject', 'SplHeap',
            'SplMinHeap', 'SplMaxHeap'
        ];
    }

    public static function summary(): array
    {
        return [
            'family' => 'PHP_SPL_CLASSES',
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
