<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_AGGREGATE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.AGGREGATE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_AGGREGATE.php
    AVIS-TYPE: CONFIG_AGGREGATE
=====================================================================*/

class COPILOT_CMS_CONFIG_AGGREGATE
{
    public static function all(): array
    {
        $core = COPILOT_CMS_CONFIG_LOADER::load('core');
        $mods = COPILOT_CMS_MODULE_CONFIG_MERGE::mergeAll();

        return [
            'core'    => $core['ok'] ? $core['data'] : [],
            'modules' => $mods,
        ];
    }
}
?>
