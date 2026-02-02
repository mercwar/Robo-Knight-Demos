<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_OVERRIDE_ENV
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.OVERRIDE.ENV
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_OVERRIDE_ENV.php
    AVIS-TYPE: CONFIG_OVERRIDE
=====================================================================*/

class COPILOT_CMS_CONFIG_OVERRIDE_ENV
{
    public static function load(): array
    {
        return [
            // Example: environment forces debug mode
            'core' => [
                'debug' => true,
            ],
        ];
    }
}
?>
