<?php

/* ::base.html.twig */
class __TwigTemplate_b41bdf1fe4e0588cfad54c9a7406101f005f5aa58cfbf8a7d0b4219fea840493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'headscripts' => array($this, 'block_headscripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Bootstrap -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
            ";
        // line 11
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 12
        echo "            ";
        $this->displayBlock('headscripts', $context, $blocks);
        // line 13
        echo "            
            

    

</head>    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "            <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all JavaScripts, compiled by Assetic -->
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Divecenter Management System";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_headscripts($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  96 => 19,  91 => 12,  86 => 9,  80 => 5,  74 => 25,  72 => 24,  68 => 23,  63 => 21,  60 => 20,  58 => 19,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  40 => 9,  36 => 8,  30 => 5,  24 => 1,);
    }
}
