<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE_ROUTER_STAGE
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE.ROUTER_STAGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE_ROUTER_STAGE.php
    AVIS-TYPE: RUNTIME_PIPELINE_STAGE
=====================================================================*/

class COPILOT_CMS_PIPELINE_ROUTER_STAGE
{
    public static function run(array $req): array
    {
        $path = $req['path'] ?? '/';

        return COPILOT_CMS_ROUTER::resolve($path);
    }
}
?>
