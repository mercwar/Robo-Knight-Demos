<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_LOG_BUFFER
    AVIS-ID: COPILOT_CMS.RUNTIME.LOG.BUFFER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/LOG/COPILOT_CMS_LOG_BUFFER.php
    AVIS-TYPE: RUNTIME_LOG_BUFFER
=====================================================================*/

class COPILOT_CMS_LOG_BUFFER
{
    public static function append(array $buffer, COPILOT_CMS_LOG_ENTRY $entry): array
    {
        $buffer[] = $entry->payload();
        return $buffer;
    }
}
?>
