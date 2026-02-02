<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_HANDLER_LOADER
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.HANDLER_LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_HANDLER_LOADER.php
    AVIS-TYPE: MODULE_HANDLER_LOADER
=====================================================================*/

class COPILOT_CMS_MODULE_HANDLER_LOADER
{
    public static function load(string $key, array $req): array
    {
        $map = COPILOT_CMS_MODULE_HANDLER_REGISTRY::merged();

        if (!isset($map[$key])) {
            return [
                'ok'    => false,
                'error' => 'module_handler_not_found',
                'key'   => $key,
            ];
        }

        $handler = $map[$key];

        // Case 1: Handler is a class implementing the interface
        if (is_string($handler) && class_exists($handler)) {
            return $handler::run($req);
        }

        // Case 2: Handler is a closure
        if (is_callable($handler)) {
            return $handler($req);
        }

        return [
            'ok'    => false,
            'error' => 'invalid_handler_type',
            'key'   => $key,
        ];
    }
}
?>
