<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_ROUTER_TABLE
    AVIS-ID: COPILOT_CMS.RUNTIME.ROUTER.TABLE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/ROUTER/COPILOT_CMS_ROUTER_TABLE.php
    AVIS-TYPE: ROUTER_TABLE
=====================================================================*/

class COPILOT_CMS_ROUTER_TABLE
{
    public static function table(): array
    {
        return [

            // Core system routes
            '/'             => 'handler.home',
            '/status'       => 'handler.status',

            // Semantic introspection
            '/semantic'     => 'handler.semantic.summary',
            '/semantic/const' => 'handler.semantic.constants',
            '/semantic/func'  => 'handler.semantic.functions',
            '/semantic/class' => 'handler.semantic.classes',

            // Placeholder for future modules
            '/module/example' => 'handler.module.example',
        ];
    }
}
?>
