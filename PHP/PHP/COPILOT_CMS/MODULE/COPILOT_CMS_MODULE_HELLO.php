<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_MODULE_HELLO
    AVIS-ID: COPILOT_CMS.RUNTIME.MODULE.HELLO
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/MODULE/COPILOT_CMS_MODULE_HELLO.php
    AVIS-TYPE: MODULE
=====================================================================*/

class COPILOT_CMS_MODULE_HELLO implements COPILOT_CMS_MODULE_INTERFACE
{
    public static function id(): string
    {
        return 'module.hello';
    }

    public static function info(): array
    {
        return [
            'name'        => 'Hello Module',
            'description' => 'A minimal example module.',
            'version'     => '1.0.0',
        ];
    }

    public static function routes(): array
    {
        return [
            '/hello' => 'handler.module.hello',
        ];
    }

    public static function handlers(): array
    {
        return [
            'handler.module.hello' => function () {
                return [
                    'msg' => 'Hello from the module system',
                ];
            },
        ];
    }
}
?>
