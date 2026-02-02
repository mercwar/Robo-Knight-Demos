<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_HANDLER_REGISTRY
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.HANDLER_REGISTRY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_HANDLER_REGISTRY.php
    AVIS-TYPE: MODULE_HANDLER_REGISTRY
=====================================================================*/

class COPILOT_CMS_MODULE_HANDLER_REGISTRY
{
    public static function merged(): array
    {
        $core = COPILOT_CMS_HANDLER_REGISTRY::map();
        $mods = [];

        foreach (COPILOT_CMS_MODULE_REGISTRY::modules() as $key => $class) {
            if (class_exists($class)) {
                $handlers = $class::handlers();
                foreach ($handlers as $hKey => $hVal) {
                    $mods[$hKey] = $hVal;
                }
            }
        }

        return array_merge($core, $mods);
    }
}
?>
