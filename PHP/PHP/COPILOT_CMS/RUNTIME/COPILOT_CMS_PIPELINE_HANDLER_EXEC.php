<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE_HANDLER_EXEC
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE.HANDLER_EXEC
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE_HANDLER_EXEC.php
    AVIS-TYPE: RUNTIME_PIPELINE_STAGE
=====================================================================*/

class COPILOT_CMS_PIPELINE_HANDLER_EXEC
{
    public static function run(string $handler, array $req): array
    {
        return COPILOT_CMS_MODULE_HANDLER_LOADER::load($handler, $req);
    }
}
?>
