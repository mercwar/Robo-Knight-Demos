<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_LOADER
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.LOADER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_LOADER.php
    AVIS-TYPE: TEMPLATE_LOADER
=====================================================================*/

class COPILOT_CMS_TEMPLATE_LOADER
{
    public static function load(string $key): array
    {
        $map = COPILOT_CMS_TEMPLATE_REGISTRY::templates();

        if (!isset($map[$key])) {
            return [
                'ok'    => false,
                'error' => 'template_not_found',
                'key'   => $key,
            ];
        }

        $class = $map[$key];

        if (!class_exists($class)) {
            return [
                'ok'    => false,
                'error' => 'template_class_missing',
                'class' => $class,
            ];
        }

        $obj = new $class();

        return [
            'ok'      => true,
            'content' => $obj->content(),
        ];
    }
}
?>
