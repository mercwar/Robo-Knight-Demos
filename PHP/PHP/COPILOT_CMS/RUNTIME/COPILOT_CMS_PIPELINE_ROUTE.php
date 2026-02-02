<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE_ROUTE
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE.ROUTE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE_ROUTE.php
    AVIS-TYPE: RUNTIME_PIPELINE_STAGE
=====================================================================*/

class COPILOT_CMS_PIPELINE_ROUTE
{
    public static function run(array $req): array
    {
        return COPILOT_CMS_ROUTER::resolve($req['path']);
    }
}
?>
