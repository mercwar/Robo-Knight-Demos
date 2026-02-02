<?php
/*=====================================================================
    AIFVS-ARTIFACT: HANDLER_HOME
    AVIS-ID: COPILOT_CMS.HANDLER.HANDLER_HOME
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/HANDLER/HANDLER_HOME.php
    AVIS-TYPE: HANDLER
    AVIS-DESCRIPTION:
        Landing page handler for COPILOT_CMS.
        Produces the data model for the home template.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No rendering logic
        - Pure data preparation
        - Deterministic output for a given request
        - Self-identifying artifact
=====================================================================*/

class HANDLER_HOME
{
    public function run(COPILOT_CMS_REQUEST $req): array
    {
        return [
            'title' => 'Welcome to COPILOT_CMS',
            'msg'   => 'Your CMS is running successfully.',
        ];
    }
}
