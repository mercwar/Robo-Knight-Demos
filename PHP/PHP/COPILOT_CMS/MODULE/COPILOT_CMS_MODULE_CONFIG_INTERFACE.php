<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_CONFIG_INTERFACE
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.CONFIG_INTERFACE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_CONFIG_INTERFACE.php
    AVIS-TYPE: MODULE_CONFIG_INTERFACE
=====================================================================*/

interface COPILOT_CMS_MODULE_CONFIG_INTERFACE
{
    public static function config(): array;

    public static function rules(): array;
}
?>
