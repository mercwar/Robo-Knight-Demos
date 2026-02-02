<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_SCOPE
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.SCOPE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_SCOPE.php
    AVIS-TYPE: TEMPLATE_SCOPE
=====================================================================*/

class COPILOT_CMS_TEMPLATE_SCOPE
{
    public static function defaults(): array
    {
        return [
            'user'   => 'Guest',
            'status' => 'unknown',
        ];
    }

    public static function allowed(): array
    {
        return array_keys(self::defaults());
    }
}
?>
