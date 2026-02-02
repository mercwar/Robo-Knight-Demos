<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_VALIDATE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.VALIDATE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_VALIDATE.php
    AVIS-TYPE: CONFIG_VALIDATOR
=====================================================================*/

class COPILOT_CMS_CONFIG_VALIDATE
{
    public static function check(array $config): array
    {
        if (!is_array($config)) {
            return [
                'ok'    => false,
                'error' => 'config_not_array',
            ];
        }

        foreach ($config as $key => $value) {
            if (!is_string($key)) {
                return [
                    'ok'    => false,
                    'error' => 'config_invalid_key',
                    'key'   => $key,
                ];
            }
        }

        return ['ok' => true];
    }
}
?>
