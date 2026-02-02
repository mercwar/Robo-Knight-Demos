<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_HANDLER_ID
    AVIS-ID: COPILOT_CMS.RUNTIME.HANDLER.IDENTITY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/COPILOT_CMS_HANDLER_ID.php
    AVIS-TYPE: HANDLER_IDENTITY
=====================================================================*/

class COPILOT_CMS_HANDLER_ID
{
    public static function identity(): array
    {
        return [
            'id'      => 'COPILOT_CMS.RUNTIME.HANDLER.IDENTITY',
            'version' => '1.0.0',
            'engine'  => 'AVIS-PURE-HANDLER',
        ];
    }
}
?>
