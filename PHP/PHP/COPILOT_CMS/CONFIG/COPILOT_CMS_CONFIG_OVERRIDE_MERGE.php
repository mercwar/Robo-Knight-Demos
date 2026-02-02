<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_OVERRIDE_MERGE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.OVERRIDE.MERGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_OVERRIDE_MERGE.php
    AVIS-TYPE: CONFIG_OVERRIDE_MERGE
=====================================================================*/

class COPILOT_CMS_CONFIG_OVERRIDE_MERGE
{
    public static function apply(array $core, array $modules, array $overrides): array
    {
        $final = [
            'core'    => $core,
            'modules' => $modules,
        ];

        foreach ($overrides as $source => $domains) {
            foreach ($domains as $domain => $values) {
                if (!isset($final[$domain])) {
                    $final[$domain] = [];
                }
                $final[$domain] = array_merge($final[$domain], $values);
            }
        }

        return $final;
    }
}
?>
