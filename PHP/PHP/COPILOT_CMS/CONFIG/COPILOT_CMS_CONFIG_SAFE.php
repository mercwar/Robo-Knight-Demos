<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_SAFE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.SAFE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_SAFE.php
    AVIS-TYPE: CONFIG_SAFE_ACCESS
=====================================================================*/

class COPILOT_CMS_CONFIG_SAFE
{
    public static function get(string $domain, string $key, $default = null)
    {
        $all = COPILOT_CMS_CONFIG_AGGREGATE::all();

        if (!isset($all[$domain])) {
            return $default;
        }

        return $all[$domain][$key] ?? $default;
    }
}
?>
