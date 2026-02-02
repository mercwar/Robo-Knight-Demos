<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_HELLO_CONFIG
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.HELLO.CONFIG
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_HELLO_CONFIG.php
    AVIS-TYPE: MODULE_CONFIG
=====================================================================*/

class COPILOT_CMS_MODULE_HELLO_CONFIG implements COPILOT_CMS_MODULE_CONFIG_INTERFACE
{
    public static function config(): array
    {
        return [
            'enabled' => true,
            'greeting'=> 'Hello from module config',
        ];
    }

    public static function rules(): array
    {
        return [
            'enabled' => [
                'required' => true,
                'type'     => 'boolean',
            ],
            'greeting' => [
                'required' => true,
                'type'     => 'string',
            ],
        ];
    }
}
?>
