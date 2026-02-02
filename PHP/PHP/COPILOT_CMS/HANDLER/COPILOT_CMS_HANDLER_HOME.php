<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_HOME
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.HOME
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_HOME.php
    AVIS-TYPE: HANDLER
=====================================================================*/

class COPILOT_CMS_HANDLER_HOME implements COPILOT_CMS_HANDLER_INTERFACE
{
    public static function run(array $req): array
    {
        return [
            'page' => 'home',
            'msg'  => 'Welcome to COPILOT_CMS',
        ];
    }
}
?>
