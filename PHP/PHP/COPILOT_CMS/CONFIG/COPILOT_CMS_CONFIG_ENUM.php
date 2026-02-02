<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_ENUM
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.ENUM
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_ENUM.php
    AVIS-TYPE: CONFIG_ENUM_CHECKER
=====================================================================*/

class COPILOT_CMS_CONFIG_ENUM
{
    public static function check($value, array $allowed): bool
    {
        return in_array($value, $allowed, true);
    }
}
?>
