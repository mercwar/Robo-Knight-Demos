<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE_VALIDATE
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE.VALIDATE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE_VALIDATE.php
    AVIS-TYPE: RUNTIME_PIPELINE_STAGE
=====================================================================*/

class COPILOT_CMS_PIPELINE_VALIDATE
{
    public static function run(array $req): array
    {
        if (!isset($req['path'])) {
            return [
                'ok'    => false,
                'stage' => 'validate',
                'error' => 'missing_path',
            ];
        }

        return [
            'ok'    => true,
            'stage' => 'validate',
            'data'  => $req,
        ];
    }
}
?>
