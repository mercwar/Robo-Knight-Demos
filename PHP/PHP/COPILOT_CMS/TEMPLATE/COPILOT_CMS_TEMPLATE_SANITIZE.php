<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_SANITIZE
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.SANITIZE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_SANITIZE.php
    AVIS-TYPE: TEMPLATE_SANITIZER
=====================================================================*/

class COPILOT_CMS_TEMPLATE_SANITIZE
{
    public static function clean(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
?>
