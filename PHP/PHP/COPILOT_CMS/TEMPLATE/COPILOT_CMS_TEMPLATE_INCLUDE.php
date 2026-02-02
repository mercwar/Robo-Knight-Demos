<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_INCLUDE
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.INCLUDE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_INCLUDE.php
    AVIS-TYPE: TEMPLATE_INCLUDE_ENGINE
=====================================================================*/

class COPILOT_CMS_TEMPLATE_INCLUDE
{
    public static function resolve(string $key): string
    {
        $partials = COPILOT_CMS_TEMPLATE_PARTIAL_REGISTRY::partials();

        if (!isset($partials[$key])) {
            return "<!-- missing partial: $key -->";
        }

        $class = $partials[$key];

        if (!class_exists($class)) {
            return "<!-- missing partial class: $class -->";
        }

        $obj = new $class();
        return $obj->content();
    }
}
?>
