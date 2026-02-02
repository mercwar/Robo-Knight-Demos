<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_VAR_MERGE
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.VAR_MERGE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_VAR_MERGE.php
    AVIS-TYPE: TEMPLATE_VAR_MERGE
=====================================================================*/

class COPILOT_CMS_TEMPLATE_VAR_MERGE
{
    public static function merge(array $vars): array
    {
        $allowed  = COPILOT_CMS_TEMPLATE_SCOPE::allowed();
        $defaults = COPILOT_CMS_TEMPLATE_SCOPE::defaults();

        $out = $defaults;

        foreach ($vars as $key => $value) {
            if (in_array($key, $allowed, true)) {
                $out[$key] = COPILOT_CMS_TEMPLATE_SANITIZE::clean((string)$value);
            }
        }

        return $out;
    }
}
?>
