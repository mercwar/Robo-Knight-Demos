<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_CONFIG_REGISTRY
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.CONFIG_REGISTRY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_CONFIG_REGISTRY.php
    AVIS-TYPE: MODULE_CONFIG_REGISTRY
=====================================================================*/

class COPILOT_CMS_MODULE_CONFIG_REGISTRY
{
    public static function domains(): array
    {
        return [
            'module.hello' => 'COPILOT_CMS_MODULE_HELLO_CONFIG',
        ];
    }
}
?>
