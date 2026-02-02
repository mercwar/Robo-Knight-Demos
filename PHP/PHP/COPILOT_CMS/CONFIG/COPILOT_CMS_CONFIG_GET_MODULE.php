<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_GET_MODULE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.GET_MODULE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_GET_MODULE.php
    AVIS-TYPE: CONFIG_GETTER_MODULE
=====================================================================*/

class COPILOT_CMS_CONFIG_GET_MODULE
{
    public static function get(string $module, string $key, $default = null)
    {
        $all = COPILOT_CMS_CONFIG_AGGREGATE::all();

        if (!isset($all['modules'][$module])) {
            return $default;
        }

        return $all['modules'][$module][$key] ?? $default;
    }
}
?>
