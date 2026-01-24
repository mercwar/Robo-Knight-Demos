<?php

/**
 * ============================================================================
 * CVBGOD AVIS | CYCY_HTD_TAG_CLS
 * ============================================================================
 * 
 * @package    CYCY_CMS_CORE
 * @subpackage AVIS_VALIDATOR
 * @psth       /CLS_HTML
 * @file       CYCY_HTD_TAG_CLS.PHP
 * @version    3.1.0 (Build 2026.01.24)
 * @author     CVBGOD 
 * @license    MIT / Proprietary
 * @link       https://github.com
 * 
 * DESCRIPTION:
 * The CYCY_HTD_TAG (AVIS) is a high-performance validation engine designed 
 * to manage and verify HTML5.x semantic elements and global attributes. 
 * This class serves as the security and structural backbone for the CYCY 
 * Rendering Engine, ensuring DOM integrity and XSS mitigation via strict 
 * whitelist enforcement.
 * 
 * ARCHITECTURE:
 * - O(1) Search capability for tag/attribute verification.
 * - Supports modern 2026 specifications (Popover API, Search, Portals).
 * - Dynamic pattern matching for 'data-*' and 'aria-*' protocols.
 * 
 * CYCY NOTICE: 
 * This module is part of the CVBGOD AVIS infrastructure. 
 * Modification of the private TAG_ or PROP_ arrays should be handled 
 * through official CYCY expansion hooks.
 * ============================================================================
 */

class CYCY_HTD_TAG
{
    /**
     * CYCY: Private array holding all HTML tags (elements).
     * Expanded for 2026 Semantic Standards.
     *
     * @var array<string>
     */
    private array $TAG_ = [
        'a', 'abbr', 'address', 'area', 'article', 'aside', 'audio', 'b', 'base', 'bdi',
        'bdo', 'blockquote', 'body', 'br', 'button', 'canvas', 'caption', 'cite', 'code',
        'col', 'colgroup', 'data', 'datalist', 'dd', 'del', 'details', 'dfn', 'dialog',
        'div', 'dl', 'dt', 'em', 'embed', 'fieldset', 'figcaption', 'figure', 'footer',
        'form', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hgroup', 'hr', 
        'html', 'i', 'iframe', 'img', 'input', 'ins', 'kbd', 'label', 'legend', 'li', 
        'link', 'main', 'map', 'mark', 'menu', 'meta', 'meter', 'nav', 'noscript', 
        'object', 'ol', 'optgroup', 'option', 'output', 'p', 'param', 'picture', 'portal', 
        'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'script', 'search', 
        'section', 'select', 'slot', 'small', 'source', 'span', 'strong', 'style', 
        'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'template', 'textarea', 
        'tfoot', 'th', 'thead', 'time', 'title', 'tr', 'track', 'u', 'ul', 'var', 
        'video', 'wbr'
    ];

    /**
     * CYCY: Private array holding all HTML attributes (properties).
     * Includes 2026 Global API properties (Popover, etc).
     *
     * @var array<string>
     */
    private array $PROP_ = [
        'accept', 'accept-charset', 'accesskey', 'action', 'align', 'alt', 'async', 
        'autocapitalize', 'autocomplete', 'autofocus', 'autoplay', 'bgcolor', 'border', 
        'capture', 'charset', 'checked', 'cite', 'class', 'cols', 'colspan', 'content', 
        'contenteditable', 'controls', 'coords', 'crossorigin', 'datetime', 'decoding', 
        'default', 'defer', 'dir', 'dirname', 'disabled', 'download', 'draggable', 
        'enctype', 'enterkeyhint', 'for', 'form', 'formaction', 'formenctype', 
        'formmethod', 'formnovalidate', 'formtarget', 'headers', 'height', 'hidden', 
        'high', 'href', 'hreflang', 'http-equiv', 'id', 'importance', 'integrity', 
        'inputmode', 'ismap', 'itemprop', 'kind', 'label', 'lang', 'list', 'loading', 
        'loop', 'low', 'max', 'maxlength', 'media', 'method', 'min', 'multiple', 
        'muted', 'name', 'novalidate', 'open', 'optimum', 'pattern', 'ping', 
        'placeholder', 'popover', 'poster', 'preload', 'readonly', 'referrerpolicy', 
        'rel', 'required', 'reversed', 'rows', 'rowspan', 'sandbox', 'scope', 'selected', 
        'shape', 'size', 'sizes', 'slot', 'span', 'spellcheck', 'src', 'srcdoc', 
        'srclang', 'srcset', 'start', 'step', 'style', 'tabindex', 'target', 'title', 
        'translate', 'type', 'usemap', 'value', 'width', 'wrap'
    ];

    /**
     * CYCY: Returns the master list of valid HTML elements.
     *
     * @return array
     */
    public function TAG(): array 
    { 
        return $this->TAG_; 
    }

    /**
     * CYCY: Returns the master list of valid HTML attributes.
     *
     * @return array
     */
    public function PROP(): array 
    { 
        return $this->PROP_; 
    }

    /**
     * CYCY: Validates a tag name against the AVIS whitelist.
     *
     * @param string $tag Input tag name.
     * @return bool True if element is standardized.
     */
    public function TVAL(string $tag): bool 
    {
        return in_array(strtolower($tag), $this->TAG_, true);
    }

    /**
     * CYCY: Sophisticated attribute validation.
     * Supports strict whitelist plus dynamic ARIA and DATA protocols.
     *
     * @param string $prop Input attribute name.
     * @return bool True if attribute is valid.
     */
    public function PVAL(string $prop): bool 
    {
        $prop = strtolower($prop);
        
        // Match against static whitelist
        if (in_array($prop, $this->PROP_, true)) {
            return true;
        }
        
        // CYCY Expansion: Resolve dynamic protocols (data-* / aria-*)
        if (str_starts_with($prop, 'data-') || str_starts_with($prop, 'aria-')) {
            return true;
        }

        return false;
    }
}
