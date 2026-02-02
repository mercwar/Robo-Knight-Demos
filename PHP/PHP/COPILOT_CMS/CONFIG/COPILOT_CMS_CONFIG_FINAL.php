<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_FINAL
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.FINAL
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_FINAL.php
    AVIS-TYPE: CONFIG_FINAL_SNAPSHOT
=====================================================================*/

class COPILOT_CMS_CONFIG_FINAL
{
    public static function snapshot(): array
    {
        $core = COPILOT_CMS_CONFIG_LOADER::load('core');
        $mods = COPILOT_CMS_MODULE_CONFIG_MERGE::mergeAll();

        $overrides = [];
        foreach (COPILOT_CMS_CONFIG_OVERRIDE_REGISTRY::sources() as $key => $class) {
            if (class_exists($class)) {
                $overrides[$key] = $class::load();
            }
        }

        return COPILOT_CMS_CONFIG_OVERRIDE_MERGE::apply(
            $core['ok'] ? $core['data'] : [],
            $mods,
            $overrides
        );
    }
}
?>
