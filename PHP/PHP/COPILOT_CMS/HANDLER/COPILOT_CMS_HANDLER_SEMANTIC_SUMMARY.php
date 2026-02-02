<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_SEMANTIC_SUMMARY
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.SEMANTIC_SUMMARY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_SEMANTIC_SUMMARY.php
    AVIS-TYPE: HANDLER
=====================================================================*/

class COPILOT_CMS_HANDLER_SEMANTIC_SUMMARY implements COPILOT_CMS_HANDLER_INTERFACE
{
    public static function run(array $req): array
    {
        return COPILOT_CMS_PHP_SEMANTIC_CORE::summary();
    }
}
?>
