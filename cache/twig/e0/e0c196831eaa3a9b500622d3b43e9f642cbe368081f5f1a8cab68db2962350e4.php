<?php

/* modular/subscribe.html.twig */
class __TwigTemplate_3bcffe2c8728c157729c1357224ab23b0ea9fa7f5147a39480a9c031a458da61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"subscribe text-center\">
  <div class=\"container\">
    <h1><i class=\"fa fa-paper-plane\"></i><span>";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</span></h1>
    ";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <section class="subscribe text-center">*/
/*   <div class="container">*/
/*     <h1><i class="fa fa-paper-plane"></i><span>{{ page.header.title }}</span></h1>*/
/*     {{ page.content }}*/
/*   </div>*/
/* </section>*/
/* */
