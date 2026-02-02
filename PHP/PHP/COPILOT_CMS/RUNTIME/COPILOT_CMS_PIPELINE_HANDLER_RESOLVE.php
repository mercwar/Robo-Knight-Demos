<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE_HANDLER_RESOLVE
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE.HANDLER_RESOLVE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE_HANDLER_RESOLVE.php
    AVIS-TYPE: RUNTIME_PIPELINE_STAGE
=====================================================================*/

class COPILOT_CMS_PIPELINE_HANDLER_RESOLVE
{
    public static function run(array $route): array
    {
        if (!$route['ok']) {
            return [
                'ok'    => false,
                'stage' => 'handler_resolve',
                'error' => 'route_not_found',
            ];
        }

        return [
            'ok'     => true,
            'stage'  => 'handler_resolve',
            'handler'=> $route['handler'],
        ];
    }
}
?>
