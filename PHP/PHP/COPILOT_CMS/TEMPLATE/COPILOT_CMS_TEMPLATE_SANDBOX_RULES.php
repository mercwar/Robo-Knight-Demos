<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_SANDBOX_RULES
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.SANDBOX.RULES
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_SANDBOX_RULES.php
    AVIS-TYPE: TEMPLATE_SANDBOX_RULES
=====================================================================*/

class COPILOT_CMS_TEMPLATE_SANDBOX_RULES
{
    public static function forbidden(): array
    {
        return [
            '<?php',     // No PHP execution
            '<?=',
            '<?=',

            '{%',        // No logic blocks
            '%}',

            '{{ php:',   // No custom PHP hooks
            '{{ eval:',  // No eval-like constructs

            '{{ include:' => 'allowed', // allowed but validated
        ];
    }
}
?>
