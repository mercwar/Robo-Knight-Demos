<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_ROUTER
    AVIS-ID: COPILOT_CMS.RUNTIME.ROUTER
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/ROUTER/COPILOT_CMS_ROUTER.php
    AVIS-TYPE: ROUTER
=====================================================================*/

class COPILOT_CMS_ROUTER
{
    public static function resolve(string $path): array
    {
        $map = COPILOT_CMS_ROUTER_TABLE::table();

        if (!isset($map[$path])) {
            return [
                'ok'     => false,
                'error'  => 'route_not_found',
                'path'   => $path,
            ];
        }

        return [
            'ok'     => true,
            'path'   => $path,
            'handler'=> $map[$path],
        ];
    }
}
?>
