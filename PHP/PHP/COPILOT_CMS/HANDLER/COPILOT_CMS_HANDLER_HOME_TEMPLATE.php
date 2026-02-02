<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_HOME_TEMPLATE
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.HOME_TEMPLATE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_HOME_TEMPLATE.php
    AVIS-TYPE: HANDLER
=====================================================================*/

class COPILOT_CMS_HANDLER_HOME_TEMPLATE implements COPILOT_CMS_HANDLER_INTERFACE
{
    public static function run(array $req): array
    {
        return [
            'template' => 'template.home',
            'vars' => [
                'user'   => 'Demon',
                'status' => 'online',
            ],
        ];
    }
}
?>
