<?php
/*=====================================================================
    AIFVS-ARTIFACT: CY_PHPINFO_CONST
    AVIS-ID: COPILOT_CMS.CONST.CY_PHPINFO_CONST
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/CONST/CY_PHPINFO_CONST.php
    AVIS-TYPE: CONSTANT-REGISTRY
    AVIS-DESCRIPTION:
        Canonical PHP information key registry for AVIS systems.
        Represents phpinfo() categories and keys WITHOUT executing phpinfo().
        Pure constant identifiers only. No runtime environment access.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - phpinfo() MUST NOT be executed
        - Only identifiers may be defined
        - No dynamic values, no environment reads
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class CY_PHPINFO_CONST
{
    public const GENERAL            = 'PHP_INFO_GENERAL';
    public const CONFIGURATION      = 'PHP_INFO_CONFIGURATION';
    public const MODULES            = 'PHP_INFO_MODULES';
    public const ENVIRONMENT        = 'PHP_INFO_ENVIRONMENT';
    public const VARIABLES          = 'PHP_INFO_VARIABLES';
    public const LICENSE            = 'PHP_INFO_LICENSE';
    public const CREDITS            = 'PHP_INFO_CREDITS';

    public const PHP_VERSION        = 'PHP_VERSION';
    public const PHP_API            = 'PHP_API';
    public const PHP_SAPI           = 'PHP_SAPI';
    public const PHP_LOADED_INI     = 'PHP_LOADED_INI';
    public const PHP_INI_SCAN_DIR   = 'PHP_INI_SCAN_DIR';

    public const EXTENSIONS         = 'PHP_EXTENSIONS';
    public const ZEND_VERSION       = 'ZEND_VERSION';
    public const ZEND_EXTENSIONS    = 'ZEND_EXTENSIONS';

    public const BUILD_DATE         = 'PHP_BUILD_DATE';
    public const BUILD_SYSTEM       = 'PHP_BUILD_SYSTEM';

    public const THREAD_SAFETY      = 'PHP_THREAD_SAFETY';
    public const DEBUG_BUILD        = 'PHP_DEBUG_BUILD';

    public const MEMORY_LIMIT       = 'PHP_MEMORY_LIMIT';
    public const MAX_EXEC_TIME      = 'PHP_MAX_EXECUTION_TIME';
    public const UPLOAD_MAX_SIZE    = 'PHP_UPLOAD_MAX_FILESIZE';
    public const POST_MAX_SIZE      = 'PHP_POST_MAX_SIZE';
}

?>
