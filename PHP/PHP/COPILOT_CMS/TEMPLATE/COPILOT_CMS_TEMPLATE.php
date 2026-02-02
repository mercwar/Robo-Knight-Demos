<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_TEMPLATE
    AVIS-ID: COPILOT_CMS.RUNTIME.TEMPLATE.OBJECT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/COPILOT_CMS_TEMPLATE.php
    AVIS-TYPE: TEMPLATE_OBJECT
=====================================================================*/

class COPILOT_CMS_TEMPLATE
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function content(): string
    {
        return $this->content;
    }
}
?>
