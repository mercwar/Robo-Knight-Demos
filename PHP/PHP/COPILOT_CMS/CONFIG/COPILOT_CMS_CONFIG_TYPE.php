<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_TYPE
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.TYPE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_TYPE.php
    AVIS-TYPE: CONFIG_TYPE_CHECKER
=====================================================================*/

class COPILOT_CMS_CONFIG_TYPE
{
    public static function check($value, string $type): bool
    {
        return match ($type) {
            'string'  => is_string($value),
            'boolean' => is_bool($value),
            'integer' => is_int($value),
            'array'   => is_array($value),
            default   => false,
        };
    }
}
?>
