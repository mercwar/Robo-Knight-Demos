<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_LOG_ENTRY
    AVIS-ID: COPILOT_CMS.RUNTIME.LOG.ENTRY
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/LOG/COPILOT_CMS_LOG_ENTRY.php
    AVIS-TYPE: RUNTIME_LOG_ENTRY
=====================================================================*/

class COPILOT_CMS_LOG_ENTRY
{
    private array $data;

    public function __construct(string $type, string $msg, array $meta = [])
    {
        $this->data = [
            'type' => $type,
            'msg'  => $msg,
            'meta' => $meta,
            'time' => time(),
        ];
    }

    public function payload(): array
    {
        return $this->data;
    }
}
?>
