<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_OVERRIDE_REGISTRY
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.OVERRIDE.REGISTRY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_OVERRIDE_REGISTRY.php
    AVIS-TYPE: CONFIG_OVERRIDE_REGISTRY
=====================================================================*/

class COPILOT_CMS_CONFIG_OVERRIDE_REGISTRY
{
    public static function sources(): array
    {
        return [
            'user' => 'COPILOT_CMS_CONFIG_OVERRIDE_USER',
            'env'  => 'COPILOT_CMS_CONFIG_OVERRIDE_ENV',
        ];
    }
}
?>
