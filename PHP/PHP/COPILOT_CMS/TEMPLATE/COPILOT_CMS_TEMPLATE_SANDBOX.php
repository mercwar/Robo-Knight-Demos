<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_SANDBOX
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.SANDBOX
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_SANDBOX.php
    AVIS-TYPE: TEMPLATE_SANDBOX
=====================================================================*/

class COPILOT_CMS_TEMPLATE_SANDBOX
{
    public static function enforce(string $content): array
    {
        $check = COPILOT_CMS_TEMPLATE_SANDBOX_VALIDATE::check($content);

        if (!$check['ok']) {
            return [
                'ok'    => false,
                'error' => 'sandbox_violation',
                'token' => $check['token'],
            ];
        }

        return [
            'ok'      => true,
            'content' => $content,
        ];
    }
}
?>
