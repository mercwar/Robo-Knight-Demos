<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_RULESET_VALIDATE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.RULESET_VALIDATE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_RULESET_VALIDATE.php
    AVIS-TYPE: CONFIG_RULESET_VALIDATOR
=====================================================================*/

class COPILOT_CMS_CONFIG_RULESET_VALIDATE
{
    public static function checkAgainst(array $config, array $rules): array
    {
        // Required keys
        foreach ($rules as $key => $rule) {
            if (!empty($rule['required']) && !array_key_exists($key, $config)) {
                return [
                    'ok'    => false,
                    'error' => 'missing_required_key',
                    'key'   => $key,
                ];
            }
        }

        // Types + enums
        foreach ($config as $key => $value) {
            if (!isset($rules[$key])) {
                return [
                    'ok'    => false,
                    'error' => 'unknown_config_key',
                    'key'   => $key,
                ];
            }

            $rule = $rules[$key];

            if (!COPILOT_CMS_CONFIG_TYPE::check($value, $rule['type'])) {
                return [
                    'ok'    => false,
                    'error' => 'invalid_type',
                    'key'   => $key,
                    'type'  => $rule['type'],
                ];
            }

            if (isset($rule['enum']) && !COPILOT_CMS_CONFIG_ENUM::check($value, $rule['enum'])) {
                return [
                    'ok'    => false,
                    'error' => 'invalid_enum_value',
                    'key'   => $key,
                    'value' => $value,
                ];
            }
        }

        return ['ok' => true];
    }
}
?>
