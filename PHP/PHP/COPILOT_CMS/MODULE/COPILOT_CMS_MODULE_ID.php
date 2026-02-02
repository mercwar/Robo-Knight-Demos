<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_ID
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.IDENTITY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_ID.php
    AVIS-TYPE: MODULE_IDENTITY
=====================================================================*/

class COPILOT_CMS_MODULE_ID
{
    public static function identity(): array
    {
        return [
            'id'      => 'COPILOT_CMS.RUNTIME.MODULE.IDENTITY',
            'version' => '1.0.0',
            'engine'  => 'AVIS-PURE-MODULES',
        ];
    }
}
?>
