<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_LOG_FACTORY
    AVIS-ID: COPILOT_CMS.RUNTIME.LOG.FACTORY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/LOG/COPILOT_CMS_LOG_FACTORY.php
    AVIS-TYPE: RUNTIME_LOG_FACTORY
=====================================================================*/

class COPILOT_CMS_LOG_FACTORY
{
    public static function make(string $type, string $msg, array $meta = []): COPILOT_CMS_LOG_ENTRY
    {
        return new COPILOT_CMS_LOG_ENTRY($type, $msg, $meta);
    }
}
?>
