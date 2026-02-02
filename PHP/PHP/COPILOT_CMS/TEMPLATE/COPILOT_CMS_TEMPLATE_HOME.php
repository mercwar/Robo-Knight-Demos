<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE_HOME
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.HOME
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE_HOME.php
    AVIS-TYPE: TEMPLATE
=====================================================================*/

class COPILOT_CMS_TEMPLATE_HOME extends COPILOT_CMS_TEMPLATE
{
    public function __construct()
    {
        parent::__construct(
            "<h1>Welcome, {{ user }}</h1>
<p>Status: {{ status }}</p>"
        );
    }
}
?>
