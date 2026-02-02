<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_CONFIG_MERGE
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.CONFIG_MERGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_CONFIG_MERGE.php
    AVIS-TYPE: MODULE_CONFIG_MERGE
=====================================================================*/

class COPILOT_CMS_MODULE_CONFIG_MERGE
{
    public static function mergeAll(): array
    {
        $out = [];

        foreach (COPILOT_CMS_MODULE_CONFIG_REGISTRY::domains() as $domain => $class) {
            $load = COPILOT_CMS_MODULE_CONFIG_LOADER::load($domain);
            if ($load['ok']) {
                $out[$domain] = $load['data'];
            }
        }

        return $out;
    }
}
?>
