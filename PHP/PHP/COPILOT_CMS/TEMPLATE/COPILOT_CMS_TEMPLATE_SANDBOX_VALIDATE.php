<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_SANDBOX_VALIDATE
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.SANDBOX.VALIDATE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_SANDBOX_VALIDATE.php
    AVIS-TYPE: TEMPLATE_SANDBOX_VALIDATOR
=====================================================================*/

class COPILOT_CMS_TEMPLATE_SANDBOX_VALIDATE
{
    public static function check(string $content): array
    {
        $rules = COPILOT_CMS_TEMPLATE_SANDBOX_RULES::forbidden();

        foreach ($rules as $rule => $mode) {

            // If rule is numeric key → simple string match
            if (is_int($rule)) {
                if (strpos($content, $mode) !== false) {
                    return [
                        'ok'    => false,
                        'error' => 'forbidden_construct',
                        'token' => $mode,
                    ];
                }
            }

            // If rule is associative → special handling
            if (is_string($rule) && $mode !== 'allowed') {
                if (strpos($content, $rule) !== false) {
                    return [
                        'ok'    => false,
                        'error' => 'forbidden_construct',
                        'token' => $rule,
                    ];
                }
            }
        }

        return ['ok' => true];
    }
}
?>
