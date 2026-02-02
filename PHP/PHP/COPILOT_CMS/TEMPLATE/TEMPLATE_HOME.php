<?php
/*=====================================================================
    AIFVS-ARTIFACT: TEMPLATE_HOME
    AVIS-ID: COPILOT_CMS.TEMPLATE.TEMPLATE_HOME
    AVIS-PATH: HTDOCS/PHP/COPILOT_CMS/TEMPLATE/TEMPLATE_HOME.php
    AVIS-TYPE: TEMPLATE
    AVIS-DESCRIPTION:
        Landing page template for COPILOT_CMS.
        Provides the HTML structure for the home view, with AVIS-law
        compliant placeholder tokens.
    AVIS-VERSION: 1.0.0
    AVIS-AUTHOR: Demon
    AVIS-LAW:
        - No PHP logic
        - Placeholder-based rendering only
        - Deterministic, static template content
        - Self-identifying artifact
=====================================================================*/

class TEMPLATE_HOME
{
    public static function content(): string
    {
        return "
        <html>
        <head>
            <title>{{ title }}</title>
        </head>
        <body>
            <h1>{{ title }}</h1>
            <p>{{ msg }}</p>
        </body>
        </html>
        ";
    }
}
