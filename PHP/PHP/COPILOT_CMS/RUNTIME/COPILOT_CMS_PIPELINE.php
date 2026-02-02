<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE.php
    AVIS-TYPE: RUNTIME_PIPELINE
=====================================================================*/

class COPILOT_CMS_PIPELINE
{
    public static function run(COPILOT_CMS_REQUEST $req): array
    {
        $r1 = COPILOT_CMS_PIPELINE_VALIDATE::run($req->all());
        if (!$r1['ok']) return $r1;

        $r2 = COPILOT_CMS_PIPELINE_ROUTE::run($r1['data']);
        if (!$r2['ok']) return $r2;

        $r3 = COPILOT_CMS_PIPELINE_HANDLER_RESOLVE::run($r2);
        if (!$r3['ok']) return $r3;

        $r4 = COPILOT_CMS_PIPELINE_HANDLER_EXEC::run($r3['handler'], $req->all());

        // NEW: Template rendering stage
        $r5 = COPILOT_CMS_PIPELINE_TEMPLATE_STAGE::run($r4);

        return [
            'ok'      => true,
            'pipeline'=> [
                'validate' => $r1,
                'route'    => $r2,
                'resolve'  => $r3,
                'execute'  => $r4,
                'render'   => $r5,
            ],
        ];
    }
}
?>
