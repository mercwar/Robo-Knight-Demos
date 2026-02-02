<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_REQUEST
    AVIS-ID: COPILOT_CMS.RUNTIME.REQUEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/RUNTIME/COPILOT_CMS_REQUEST.php
    AVIS-TYPE: RUNTIME_REQUEST
=====================================================================*/

class COPILOT_CMS_REQUEST
{
    private array $data;

    public function __construct(array $input)
    {
        $this->data = $input;
    }

    public function get(string $key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    public function all(): array
    {
        return $this->data;
    }
}
?>
