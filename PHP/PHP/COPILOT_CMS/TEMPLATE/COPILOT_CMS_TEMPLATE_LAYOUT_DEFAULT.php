<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_LAYOUT_DEFAULT
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.LAYOUT_DEFAULT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_LAYOUT_DEFAULT.php
    AVIS-TYPE: TEMPLATE_LAYOUT
=====================================================================*/

class COPILOT_CMS_TEMPLATE_LAYOUT_DEFAULT extends COPILOT_CMS_TEMPLATE
{
    public function __construct()
    {
        parent::__construct(
            "<html>
<head><title>COPILOT_CMS</title></head>
<body>
{{ include:partial.header }}
<div class='content'>
{{ content }}
</div>
</body>
</html>"
        );
    }
}
?>
