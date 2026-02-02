<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_CONFIG_LOADER
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.CONFIG_LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_CONFIG_LOADER.php
    AVIS-TYPE: MODULE_CONFIG_LOADER
=====================================================================*/

class COPILOT_CMS_MODULE_CONFIG_LOADER
{
    public static function load(string $domain): array
    {
        $map = COPILOT_CMS_MODULE_CONFIG_REGISTRY::domains();

        if (!isset($map[$domain])) {
            return [
                'ok'    => false,
                'error' => 'module_config_domain_not_found',
                'domain'=> $domain,
            ];
        }

        $class = $map[$domain];

        if (!class_exists($class)) {
            return [
                'ok'    => false,
                'error' => 'module_config_class_missing',
                'class' => $class,
            ];
        }

        $config = $class::config();
        $rules  = $class::rules();

        // Validate structure
        $valid = COPILOT_CMS_CONFIG_VALIDATE::check($config);
        if (!$valid['ok']) return $valid;

        // Validate ruleset
        $ruleCheck = COPILOT_CMS_CONFIG_RULESET_VALIDATE::checkAgainst($config, $rules);
        if (!$ruleCheck['ok']) return $ruleCheck;

        return [
            'ok'   => true,
            'data' => $config,
        ];
    }
}
?>
