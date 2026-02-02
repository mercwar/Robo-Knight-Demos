<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_LOADER
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_LOADER.php
    AVIS-TYPE: MODULE_LOADER
=====================================================================*/

class COPILOT_CMS_MODULE_LOADER
{
    public static function load(string $key): array
    {
        $map = COPILOT_CMS_MODULE_REGISTRY::modules();

        if (!isset($map[$key])) {
            return [
                'ok'    => false,
                'error' => 'module_not_found',
                'key'   => $key,
            ];
        }

        $class = $map[$key];

        if (!class_exists($class)) {
            return [
                'ok'    => false,
                'error' => 'module_class_missing',
                'class' => $class,
            ];
        }

        return [
            'ok'      => true,
            'id'      => $class::id(),
            'info'    => $class::info(),
            'routes'  => $class::routes(),
            'handlers'=> $class::handlers(),
        ];
    }
}
?>
