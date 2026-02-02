<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_OVERRIDE_USER
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.OVERRIDE.USER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_OVERRIDE_USER.php
    AVIS-TYPE: CONFIG_OVERRIDE
=====================================================================*/

class COPILOT_CMS_CONFIG_OVERRIDE_USER
{
    public static function load(): array
    {
        return [
            // Example: user overrides site name
            'core' => [
                'site_name' => 'COPILOT_CMS (User Override)',
            ],
        ];
    }
}
?>
