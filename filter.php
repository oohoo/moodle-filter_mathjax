<?php 

/**
 * *************************************************************************
 * *                               MathEditor                             **
 * *************************************************************************
 * @package     filter                                                    **
 * @subpackage  mathjax                                                   **
 * @name        MathJax                                                   **
 * @copyright   oohoo.biz                                                 **
 * @link        http://oohoo.biz                                          **
 * @author      Patrick Thibaudeau, Raymond Wainman                       **
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later  **
 * *************************************************************************
 * ************************************************************************ */

class filter_mathjax extends moodle_text_filter {

    /**
     * Filters the text given and returns the result.
     *
     * @override
     * @param $text some HTML content
     * @param array $options options passed to the filter
     * @return the HTML content after the filtering has been applied
     */
    public function filter($text, array $options = array()) {
        // Nothing to be done as the MathJax code automatically detects the $$ delimiters
        return $text;
    }

    /**
     * Sets up the page before calling the filter, performs any setup tasks required.
     *
     * @override
     * @param moodle_page $page the page we are going to add requirements to.
     * @param context $context the context which contents are going to be filtered.
     */
    public function setup($page, $context) {
        $page->requires->js(new moodle_url('/filter/mathjax/vendor/mathjax/MathJax.js', array(
            'config' => 'TeX-AMS-MML_HTMLorMML',
            'delayStartupUntil' => 'onload'
        )));
    }
}
