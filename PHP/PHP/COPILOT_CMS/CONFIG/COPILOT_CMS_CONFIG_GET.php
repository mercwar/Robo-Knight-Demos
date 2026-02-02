<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_GET
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.GET
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_GET.php
    AVIS-TYPE: CONFIG_GETTER
=====================================================================*/

class COPILOT_CMS_CONFIG_GET
{
    public static function core(string $key, $default = null)
    {
        $all = COPILOT_CMS_CONFIG_AGGREGATE::all();
        return $all['core'][$key] ?? $default;
    }
}
?>
