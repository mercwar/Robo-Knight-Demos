<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_PIPELINE_LOG_STAGE
    AVIS-ID: COPILOT_CMS.RUNTIME.PIPELINE.LOG_STAGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_PIPELINE_LOG_STAGE.php
    AVIS-TYPE: RUNTIME_PIPELINE_STAGE
=====================================================================*/

class COPILOT_CMS_PIPELINE_LOG_STAGE
{
    public static function run(array $req, array $pipe): array
    {
        $log = [];

        $log = COPILOT_CMS_LOG_BUFFER::append(
            $log,
            COPILOT_CMS_LOG_FACTORY::make('pipeline', 'pipeline_started', ['req' => $req])
        );

        $log = COPILOT_CMS_LOG_BUFFER::append(
            $log,
            COPILOT_CMS_LOG_FACTORY::make('pipeline', 'pipeline_completed', ['pipe' => $pipe])
        );

        return $log;
    }
}
?>
