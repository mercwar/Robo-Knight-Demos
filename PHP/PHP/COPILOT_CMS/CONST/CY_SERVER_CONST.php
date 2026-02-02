<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_SERVER_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_SERVER_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_SERVER_CONST.php
    AVIS-TYPE: CONSTANT-REGISTRY
    AVIS-DESCRIPTION:
        Immutable registry of canonical server key identifiers.
        Contains NO phpinfo(), NO $_SERVER, NO runtime values.
        Pure AVIS constant definitions only.
    AVIS-VERSION: 1.0.1
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No dynamic environment access
        - No phpinfo()
        - No $_SERVER reads
        - Constants represent identifiers ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class CY_SERVER_CONST
{
    public const SERVER_NAME       = 'SERVER_NAME';
    public const SERVER_ADDR       = 'SERVER_ADDR';
    public const SERVER_PORT       = 'SERVER_PORT';
    public const SERVER_PROTOCOL   = 'SERVER_PROTOCOL';
    public const SERVER_SOFTWARE   = 'SERVER_SOFTWARE';

    public const REQUEST_METHOD    = 'REQUEST_METHOD';
    public const REQUEST_URI       = 'REQUEST_URI';
    public const QUERY_STRING      = 'QUERY_STRING';

    public const DOCUMENT_ROOT     = 'DOCUMENT_ROOT';
    public const SCRIPT_FILENAME   = 'SCRIPT_FILENAME';
    public const SCRIPT_NAME       = 'SCRIPT_NAME';
    public const PHP_SELF          = 'PHP_SELF';

    public const HTTPS             = 'HTTPS';
    public const REMOTE_ADDR       = 'REMOTE_ADDR';
    public const REMOTE_PORT       = 'REMOTE_PORT';
    public const REMOTE_HOST       = 'REMOTE_HOST';

    public const HTTP_HOST         = 'HTTP_HOST';
    public const HTTP_USER_AGENT   = 'HTTP_USER_AGENT';
    public const HTTP_ACCEPT       = 'HTTP_ACCEPT';
    public const HTTP_REFERER      = 'HTTP_REFERER';
    public const HTTP_ACCEPT_LANG  = 'HTTP_ACCEPT_LANGUAGE';
    public const HTTP_ACCEPT_ENC   = 'HTTP_ACCEPT_ENCODING';
}

?>
