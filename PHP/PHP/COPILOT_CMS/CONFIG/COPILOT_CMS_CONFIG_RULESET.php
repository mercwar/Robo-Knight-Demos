<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_CONFIG_RULESET
    AVIS-ID: COPILOT_CMS.RUNTIME.CONFIG.RULESET
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONFIG/COPILOT_CMS_CONFIG_RULESET.php
    AVIS-TYPE: CONFIG_RULESET
=====================================================================*/

class COPILOT_CMS_CONFIG_RULESET
{
    public static function rules(): array
    {
        return [
            'site_name' => [
                'required' => true,
                'type'     => 'string',
            ],

            'env' => [
                'required' => true,
                'type'     => 'string',
                'enum'     => ['production', 'development', 'testing'],
            ],

            'debug' => [
                'required' => true,
                'type'     => 'boolean',
            ],
        ];
    }
}
?>
