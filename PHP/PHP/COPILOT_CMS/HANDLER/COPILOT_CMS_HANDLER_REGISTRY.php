<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_REGISTRY
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.REGISTRY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_REGISTRY.php
    AVIS-TYPE: HANDLER_REGISTRY
=====================================================================*/

class COPILOT_CMS_HANDLER_REGISTRY
{
    public static function map(): array
    {
        return [
            'handler.home'              => 'COPILOT_CMS_HANDLER_HOME',
            'handler.status'            => 'COPILOT_CMS_HANDLER_STATUS',
            'handler.semantic.summary'  => 'COPILOT_CMS_HANDLER_SEMANTIC_SUMMARY',
        ];
    }
}
?>
