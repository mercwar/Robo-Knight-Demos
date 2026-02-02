<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_DISPATCH
    AVIS-ID: COPILOT_CMS.RUNTIME.DISPATCH
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_DISPATCH.php
    AVIS-TYPE: RUNTIME_DISPATCHER
=====================================================================*/

class COPILOT_CMS_DISPATCH
{
    public static function handle(array $input): COPILOT_CMS_RESPONSE
    {
        $req  = new COPILOT_CMS_REQUEST($input);
        $pipe = COPILOT_CMS_PIPELINE::run($req);
        return new COPILOT_CMS_RESPONSE($pipe);
    }
}
?>
