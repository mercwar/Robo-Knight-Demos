<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_REQUEST
    AVIS-ID: COPILOT_CMS.RUNTIME.COPILOT_CMS_REQUEST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/COPILOT_CMS_REQUEST.php
    AVIS-TYPE: REQUEST-CONTAINER
    AVIS-DESCRIPTION:
        Immutable request container for COPILOT_CMS.
        Encapsulates GET, POST, and SERVER data for the runtime pipeline.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No mutation after construction
        - No side effects
        - Pure data holder
        - Self-identifying artifact
=====================================================================*/

class COPILOT_CMS_REQUEST
{
    public array $get;
    public array $post;
    public array $server;

    public function __construct(array $get, array $post, array $server)
    {
        $this->get    = $get;
        $this->post   = $post;
        $this->server = $server;
    }
}
