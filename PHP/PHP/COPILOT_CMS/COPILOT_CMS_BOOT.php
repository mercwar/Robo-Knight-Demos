<?php
/*=====================================================================
    AIFVS-ARTIFACT: COPILOT_CMS_BOOT
    AVIS-ID: COPILOT_CMS.BOOT.COPILOT_CMS_BOOT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/COPILOT_CMS_BOOT.php
    AVIS-TYPE: CMS-BOOTSTRAP
    AVIS-DESCRIPTION:
        Primary bootstrap for COPILOT_CMS.
        Loads core runtime artifacts, handlers, templates, and executes
        the request pipeline to produce a response.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No business logic
        - Deterministic bootstrap sequence
        - Explicit artifact inclusion
        - Self-identifying artifact
=====================================================================*/

require_once __DIR__ . '/COPILOT_CMS_REQUEST.php';
require_once __DIR__ . '/COPILOT_CMS_PIPELINE.php';

require_once __DIR__ . '/HANDLER/HANDLER_HOME.php';
require_once __DIR__ . '/TEMPLATE/TEMPLATE_HOME.php';
require_once __DIR__ . '/TEMPLATE/TEMPLATE_RENDER.php';

$req = new COPILOT_CMS_REQUEST($_GET, $_POST, $_SERVER);

$result = COPILOT_CMS_PIPELINE::run($req);

if (isset($result['html'])) {
    echo $result['html'];
    exit;
}

header('Content-Type: application/json');
echo json_encode($result, JSON_PRETTY_PRINT);
