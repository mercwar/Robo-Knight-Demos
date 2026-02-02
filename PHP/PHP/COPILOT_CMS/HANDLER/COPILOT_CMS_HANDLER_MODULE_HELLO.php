<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_MODULE_HELLO
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.MODULE_HELLO
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_MODULE_HELLO.php
    AVIS-TYPE: HANDLER
=====================================================================*/

class COPILOT_CMS_HANDLER_MODULE_HELLO implements COPILOT_CMS_HANDLER_INTERFACE
{
    public static function run(array $req): array
    {
        return [
            'msg' => 'Hello from a module handler',
            'req' => $req,
        ];
    }
}
?>
