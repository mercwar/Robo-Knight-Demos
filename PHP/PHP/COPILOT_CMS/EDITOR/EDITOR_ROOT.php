<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_ROOT
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_ROOT
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_ROOT.php
    AVIS-TYPE: ROOT
    AVIS-DESCRIPTION:
        Canonical root descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines subsystem root identity, entrypoint descriptors,
        and top-level invariant bindings. This is the highest-level
        artifact in the EDITOR subsystem hierarchy.
        Contains NO rendering, NO mutation, NO environment access,
        NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - Root descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_ROOT
{
    /*=============================================================
        ROOT IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'root_id'   => EDITOR_ROOT_ID::AVIS_ID,
            'root_type' => EDITOR_ROOT_ID::AVIS_TYPE,
            'root_ver'  => EDITOR_ROOT_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        ROOT ENTRYPOINT
    ==============================================================*/
    public static function entrypoint(): array
    {
        return [
            'entry'      => 'EDITOR_CORE',
            'runtime'    => 'EDITOR_RUNTIME',
            'api'        => 'EDITOR_API',
            'schema'     => 'EDITOR_SCHEMA',
            'format'     => 'EDITOR_FORMAT',
            'output'     => 'EDITOR_OUTPUT',
        ];
    }

    /*=============================================================
        ROOT INVARIANTS
    ==============================================================*/
    public static function invariants(): array
    {
        return [
            'requires_schema'  => true,
            'requires_runtime' => true,
            'requires_format'  => true,
            'requires_output'  => true,
            'law'              => 'AVIS-LAW',
            'generation'       => 'AVIS-CMS-GEN-1',
        ];
    }

    /*=============================================================
        ROOT SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'root_id'   => EDITOR_ROOT_ID::AVIS_ID,
            'root_type' => EDITOR_ROOT_ID::AVIS_TYPE,
            'root_ver'  => EDITOR_ROOT_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL ROOT PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'   => self::identity(),
            'entrypoint' => self::entrypoint(),
            'invariants' => self::invariants(),
        ];
    }
}

class EDITOR_ROOT_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_ROOT';
    public const AVIS_TYPE = 'ROOT';
    public const VERSION   = '1.0.0';
}

?>
