<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_LOG_ID
    AVIS-ID: COPILOT_CMS.RUNTIME.LOG.IDENTITY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/LOG/COPILOT_CMS_LOG_ID.php
    AVIS-TYPE: RUNTIME_LOG_IDENTITY
=====================================================================*/

class COPILOT_CMS_LOG_ID
{
    public static function identity(): array
    {
        return [
            'id'      => 'COPILOT_CMS.RUNTIME.LOG.IDENTITY',
            'version' => '1.0.0',
            'engine'  => 'AVIS-PURE-LOGGING',
        ];
    }
}
?>
