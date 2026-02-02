<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_INTERFACE
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.INTERFACE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_INTERFACE.php
    AVIS-TYPE: MODULE_INTERFACE
=====================================================================*/

interface COPILOT_CMS_MODULE_INTERFACE
{
    public static function id(): string;

    public static function info(): array;

    public static function routes(): array;

    public static function handlers(): array;
}
?>
