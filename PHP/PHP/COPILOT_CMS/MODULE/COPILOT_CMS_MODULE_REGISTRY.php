<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_REGISTRY
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.REGISTRY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_REGISTRY.php
    AVIS-TYPE: MODULE_REGISTRY
=====================================================================*/

class COPILOT_CMS_MODULE_REGISTRY
{
    public static function modules(): array
    {
        return [
            'module.hello' => 'COPILOT_CMS_MODULE_HELLO',
        ];
    }
}
?>
