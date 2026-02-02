<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_LOADER
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_LOADER.php
    AVIS-TYPE: HANDLER_LOADER
=====================================================================*/

class COPILOT_CMS_HANDLER_LOADER
{
    public static function load(string $key): array
    {
        $map = COPILOT_CMS_HANDLER_REGISTRY::map();

        if (!isset($map[$key])) {
            return [
                'error' => 'handler_not_found',
                'key'   => $key,
            ];
        }

        $class = $map[$key];

        if (!class_exists($class)) {
            return [
                'error' => 'handler_class_missing',
                'class' => $class,
            ];
        }

        return $class::run([]);
    }
}
?>
