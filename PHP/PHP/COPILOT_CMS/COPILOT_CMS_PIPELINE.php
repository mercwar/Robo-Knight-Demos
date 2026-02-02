<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE
    AVIS-ID: COPILOT_CMS.RUNTIME.COPILOT_CMS_PIPELINE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/COPILOT_CMS_PIPELINE.php
    AVIS-TYPE: PIPELINE-ENGINE
    AVIS-DESCRIPTION:
        Minimal runtime pipeline for COPILOT_CMS.
        Routes the request to the home handler and renders the home
        template into final HTML output.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Deterministic pipeline flow
        - No global state mutation
        - Single responsibility: orchestrate handler + template
        - Self-identifying artifact
=====================================================================*/

class COPILOT_CMS_PIPELINE
{
    public static function run(COPILOT_CMS_REQUEST $req): array
    {
        $handler = new HANDLER_HOME();

        $data = $handler->run($req);

        $html = TEMPLATE_RENDER::render(
            TEMPLATE_HOME::content(),
            $data
        );

        return [
            'ok'   => true,
            'html' => $html,
        ];
    }
}
