<?php
/*=====================================================================
    AIFVS-ARTIFACT: EDITOR_UI
    AVIS-ID: COPILOT_CMS.EDITOR.EDITOR_UI
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/EDITOR/EDITOR_UI.php
    AVIS-TYPE: UI
    AVIS-DESCRIPTION:
        Deterministic UI descriptor for the COPILOT_CMS EDITOR subsystem.
        Defines structural UI surfaces, interaction descriptors, and
        canonical editing interface structures. Contains NO rendering,
        NO mutation, NO environment access, NO external calls, NO phpinfo().
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - UI descriptors ONLY
        - Deterministic, immutable, self-identifying artifact
=====================================================================*/

class EDITOR_UI
{
    /*=============================================================
        UI IDENTITY
    ==============================================================*/
    public static function identity(): array
    {
        return [
            'ui_id'   => EDITOR_UI_ID::AVIS_ID,
            'ui_type' => EDITOR_UI_ID::AVIS_TYPE,
            'ui_ver'  => EDITOR_UI_ID::VERSION,
            'subsystem' => 'COPILOT_CMS_EDITOR',
        ];
    }

    /*=============================================================
        UI SURFACES
    ==============================================================*/
    public static function surfaces(): array
    {
        return [
            'editor_canvas' => [
                'content_surface'   => 'primary editing surface',
                'cursor_surface'    => 'cursor visualization layer',
                'selection_surface' => 'selection highlight layer',
                'structure_overlay' => 'schema structure overlay',
            ],
            'sidebar' => [
                'metadata_panel' => 'document metadata inspector',
                'structure_panel'=> 'document structure tree',
                'history_panel'  => 'edit history viewer',
            ],
            'toolbar' => [
                'mode_switcher' => 'edit/insert/visual/structure',
                'format_tools'  => 'bold/italic/underline/etc',
                'structure_tools'=> 'heading/list/block tools',
            ],
        ];
    }

    /*=============================================================
        UI INTERACTIONS
    ==============================================================*/
    public static function interactions(): array
    {
        return [
            'cursor_movement' => 'arrow keys, mouse click, touch drag',
            'text_input'      => 'keyboard input mapped to runtime',
            'selection'       => 'drag, shift-click, keyboard selection',
            'structure_edit'  => 'schema-enforced structural operations',
            'metadata_edit'   => 'panel-based metadata updates',
        ];
    }

    /*=============================================================
        UI STATES
    ==============================================================*/
    public static function states(): array
    {
        return [
            'edit_mode'      => 'direct text editing',
            'insert_mode'    => 'insert-only operations',
            'visual_mode'    => 'visual block manipulation',
            'structure_mode' => 'schema-locked editing',
        ];
    }

    /*=============================================================
        UI SUMMARY
    ==============================================================*/
    public static function summary(): array
    {
        return [
            'ui_id'   => EDITOR_UI_ID::AVIS_ID,
            'ui_type' => EDITOR_UI_ID::AVIS_TYPE,
            'ui_ver'  => EDITOR_UI_ID::VERSION,
        ];
    }

    /*=============================================================
        FULL UI PACKAGE
    ==============================================================*/
    public static function full(): array
    {
        return [
            'identity'     => self::identity(),
            'surfaces'     => self::surfaces(),
            'interactions' => self::interactions(),
            'states'       => self::states(),
        ];
    }
}

class EDITOR_UI_ID
{
    public const AVIS_ID   = 'COPILOT_CMS.EDITOR.EDITOR_UI';
    public const AVIS_TYPE = 'UI';
    public const VERSION   = '1.0.0';
}

?>
