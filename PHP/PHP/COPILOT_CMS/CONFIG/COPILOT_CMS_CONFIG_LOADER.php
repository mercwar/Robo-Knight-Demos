<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_LOADER
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_LOADER.php
    AVIS-TYPE: CONFIG_LOADER
=====================================================================*/

class COPILOT_CMS_CONFIG_LOADER
{
    public static function load(string $domain): array
    {
        $map = COPILOT_CMS_CONFIG_REGISTRY::domains();

        if (!isset($map[$domain])) {
            return [
                'ok'    => false,
                'error' => 'config_domain_not_found',
                'domain'=> $domain,
            ];
        }

        $class = $map[$domain];

        if (!class_exists($class)) {
            return [
                'ok'    => false,
                'error' => 'config_class_missing',
                'class' => $class,
            ];
        }

        $config = $class::config();

        // Validate structure
        $valid = COPILOT_CMS_CONFIG_VALIDATE::check($config);
        if (!$valid['ok']) return $valid;

        // Validate ruleset
        $rules = COPILOT_CMS_CONFIG_RULESET_VALIDATE::check($config);
        if (!$rules['ok']) return $rules;

        return [
            'ok'   => true,
            'data' => $config,
        ];
    }
}
?>
