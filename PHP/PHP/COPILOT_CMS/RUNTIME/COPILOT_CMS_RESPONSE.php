<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_RESPONSE
    AVIS-ID: COPILOT_CMS.RUNTIME.RESPONSE
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_RESPONSE.php
    AVIS-TYPE: RUNTIME_RESPONSE
=====================================================================*/

class COPILOT_CMS_RESPONSE
{
    private array $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    public function payload(): array
    {
        return $this->payload;
    }
}
?>
