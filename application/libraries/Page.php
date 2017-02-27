<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page
{

    private $page;

    public function __construct($debug = false)
    {
        // Set up object shell
        $this->page = (object)[
            'debug' => $debug,
            'views' => [],
            'vars' => (object)[],
            'template' => GLOBAL_TEMPLATE,
            'header' => (object)[
                'scripts' => (object)[
                    'css' => [],
                    'js' => []
                ],
                'title' => null,
                'meta' => []
            ]
        ];

        // Load all required scripts automatically
        $this->load_required_scripts();

    }

    public function get_var($name)
    {
        return property_exists($this->page->vars, $name) ? $this->page->vars->{$name} : null;
    }

    public function set_var($name, $value)
    {
        $this->page->vars->{$name} = $value;
        return $this;
    }

    public function get_template()
    {
        return $this->page->template;
    }

    public function set_template($template)
    {
        $this->page->template = $template;
        return $this;
    }

    public function get_views()
    {
        return $this->page->views;
    }

    public function set_views($views)
    {
        // Make array
        if (is_string($views))
        {
            $views = [$views];
        }
        $this->force_array($views);

        // Add views to the stack
        $this->page->views += $views;

        // Method chaining
        return $this;
    }

    // Single-use aliase of set_views()
    public function set_view($view)
    {
        return $this->set_views($view);
    }

    public function get_title()
    {
        return $this->page->header->title;
    }

    public function set_title($title)
    {
        $this->page->header->title = $title;
        return $this;
    }

    public function get_css()
    {
        return $this->page->header->scripts->css;
    }

    public function get_css_html()
    {
        return $this->get_html($this->page->header->scripts->css, '<link', ' />', ['disabled']);
    }

    public function set_css($href, $rel = 'stylesheet', $attrs = [])
    {
        // Convert to array
        $this->force_array($attrs);
        // Unset href and rel in attributes
        unset($attrs['href']);
        unset($attrs['rel']);
        // Add to stack
        $this->page->header->scripts->css[] = (object)array_merge(['href' => $href, 'rel' => $rel], $attrs);
        // For method chaining
        return $this;
    }

    public function get_js()
    {
        return $this->page->header->scripts->js;
    }

    public function get_js_html()
    {
        return $this->get_html($this->page->header->scripts->js, '<script', '></script>', ['async', 'defer']);
    }

    public function use_filters()
    {
        return $this->set_css('/assets/css/filters.css', 'stylesheet', ['media' => 'screen']);
    }

    public function set_js($src, $attrs = [])
    {
        // Convert to array
        $this->force_array($attrs);
        // Unset src in attributes
        unset($attrs['src']);
        // Add to stack
        $this->page->header->scripts->js[] = (object)array_merge(['src' => $src], $attrs);
        // For method chaining
        return $this;
    }

    public function render()
    {
        // CI Super Object
        $CI =& get_instance();

        // Convert scripting arrays to HTML
        $this->page->header->scripts->css = $this->get_css_html();
        $this->page->header->scripts->js  = $this->get_js_html();

        // Make full title
        $_title = $this->page->header->title;
        $this->page->header->title = GLOBAL_TITLE . (!is_null($_title) ? GLOBAL_TITLE_SEPARATOR . $_title : '');

        // Load page setup variables
        $CI->load->vars($this->page);

        // Render views
        // Header
        $CI->load->view('templates/' . $this->page->template . '/header');
        // View stack
        foreach ($this->get_views() as $view)
        {
            $CI->load->view($view);
        }
        // Footer
        $CI->load->view('templates/' . $this->page->template . '/footer');

    }

    private function get_html($tags, $open, $close, $voids = [])
    {
        // HTML tag array
        $html = [];

        // Loop through each stored JS file
        foreach ($tags as $attrs) {
            // Script tag array with opening tag
            $tag = [$open];

            // Loop through each key/value pair
            foreach ($attrs as $name => $value) {
                // Self-closing (void) attributes don't get an equals sign
                if (in_array($name, $voids)) {
                    $tag[] = $name;
                } else {
                    // Add name/value pair
                    $tag[] = $name . '="' . $value . '"';
                }
            }

            // Collapse tag array and close link
            $html[] = implode(' ', $tag) . $close;
        }

        // Collapse HTML tag array
        return implode(PHP_EOL, $html) . PHP_EOL;
    }

    private function force_array(&$attrs)
    {
        // Convert object to array
        if (is_object($attrs))
        {
            $attrs = (array)$attrs;
        }
        elseif (!is_array($attrs))
        {
            // Drop all non-array attributes
            $attrs = [];
        };
    }

    private function load_required_scripts()
    {
        $this->set_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 'stylesheet', ['media' => 'screen']);
        $this->set_css('/assets/css/reset.css', 'stylesheet', ['media' => 'screen']);
        $this->set_css('/assets/css/base.css', 'stylesheet', ['media' => 'screen']);
        $this->set_js('/assets/js/base.js', ['type' => 'text/javascript']);
        //$this->set_js('/assets/js/jevents.js', ['type' => 'text/javascript']);
    }

}
