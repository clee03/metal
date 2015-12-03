<?php

/* system.html.twig */
class __TwigTemplate_bd1d9268deae55a3f454822f34da299dc744066be24d02d6bf35056ec17304b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "system.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"));
        // line 5
        $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => "system"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
        // line 14
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_titlebar($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 20
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        // line 21
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
        echo "</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 23
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION");
        echo " - ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM");
        echo "</h1>
";
    }

    // line 26
    public function block_content_top($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"alert notice\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION");
        echo ": <b>";
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "file", array()), "filename", array()), array((isset($context["base_path"]) ? $context["base_path"] : null) => ""));
        echo "</b></div>
    <ul class=\"tab-bar\">
        <li class=\"active\"><span>";
        // line 29
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM");
        echo "</span></li>
        <li><a href=\"";
        // line 30
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/site\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE");
        echo "</a></li>
        <li><a href=\"";
        // line 31
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/info\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO");
        echo "</a></li>
    </ul>
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "system.html.twig", 36)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()), "data" => (isset($context["data"]) ? $context["data"] : null))));
    }

    public function getTemplateName()
    {
        return "system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  121 => 35,  112 => 31,  106 => 30,  102 => 29,  94 => 27,  91 => 26,  83 => 23,  78 => 21,  72 => 20,  69 => 19,  66 => 18,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  43 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set title = "PLUGIN_ADMIN.CONFIGURATION"|tu ~ ": " ~ "PLUGIN_ADMIN.SYSTEM"|tu %}*/
/* */
/* {% set data = admin.data('system') %}*/
/* */
/* {% block stylesheets %}*/
/*     {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }} - {{ "PLUGIN_ADMIN.SYSTEM"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block content_top %}*/
/*     <div class="alert notice">{{ "PLUGIN_ADMIN.SAVE_LOCATION"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>*/
/*     <ul class="tab-bar">*/
/*         <li class="active"><span>{{ "PLUGIN_ADMIN.SYSTEM"|tu }}</span></li>*/
/*         <li><a href="{{ base_url_relative }}/site">{{ "PLUGIN_ADMIN.SITE"|tu }}</a></li>*/
/*         <li><a href="{{ base_url_relative }}/info">{{ "PLUGIN_ADMIN.INFO"|tu }}</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}*/
/* {% endblock %}*/
/* */
/* */
