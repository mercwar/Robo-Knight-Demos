<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_ROUTER_ID
    AVIS-ID: COPILOT_CMS.RUNTIME.ROUTER.IDENTITY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/ROUTER/COPILOT_CMS_ROUTER_ID.php
    AVIS-TYPE: ROUTER_IDENTITY
=====================================================================*/

class COPILOT_CMS_ROUTER_ID
{
    public static function identity(): array
    {
        return [
            'id'        => 'COPILOT_CMS.RUNTIME.ROUTER.IDENTITY',
            'version'   => '1.0.0',
            'engine'    => 'AVIS-PURE-ROUTER',
            'features'  => [
                'deterministic_path_map',
                'pure_resolution',
                'no_side_effects',
            ],
        ];
    }
}
?>
