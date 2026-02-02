<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_ROUTER_MODULE_STUB
    AVIS-ID: COPILOT_CMS.RUNTIME.ROUTER.MODULE_STUB
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/ROUTER/COPILOT_CMS_ROUTER_MODULE_STUB.php
    AVIS-TYPE: ROUTER_EXTENSION
=====================================================================*/

class COPILOT_CMS_ROUTER_MODULE_STUB
{
    public static function moduleRoutes(): array
    {
        $routes = [];

        foreach (COPILOT_CMS_MODULE_REGISTRY::modules() as $key => $class) {
            if (class_exists($class)) {
                $routes = array_merge($routes, $class::routes());
            }
        }

        return $routes;
    }
}
?>
