<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_STATUS
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.STATUS
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_STATUS.php
    AVIS-TYPE: HANDLER
=====================================================================*/

class COPILOT_CMS_HANDLER_STATUS implements COPILOT_CMS_HANDLER_INTERFACE
{
    public static function run(array $req): array
    {
        return [
            'status' => 'ok',
            'time'   => time(),
        ];
    }
}
?>
