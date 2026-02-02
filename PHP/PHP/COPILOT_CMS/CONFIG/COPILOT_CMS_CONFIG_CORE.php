<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_CORE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.CORE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_CORE.php
    AVIS-TYPE: CONFIG_DOMAIN
=====================================================================*/

class COPILOT_CMS_CONFIG_CORE
{
    public static function config(): array
    {
        return [
            'site_name' => 'COPILOT_CMS',
            'env'       => 'production',
            'debug'     => false,
        ];
    }
}
?>
