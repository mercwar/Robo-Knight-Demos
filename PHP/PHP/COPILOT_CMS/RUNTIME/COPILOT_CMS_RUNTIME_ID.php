<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_RUNTIME_ID
    AVIS-ID: COPILOT_CMS.RUNTIME.IDENTITY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_RUNTIME_ID.php
    AVIS-TYPE: RUNTIME_IDENTITY
=====================================================================*/

class COPILOT_CMS_RUNTIME_ID
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.RUNTIME.IDENTITY',
            'version'   => '1.0.0',
            'engine'    => 'AVIS-PURE-RUNTIME',
            'features'  => [
                'pure_request',
                'pure_response',
                'deterministic_pipeline',
                'semantic_core_integration',
            ],
        ];
    }
}
?>
