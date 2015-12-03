<?php

/* modular/swag.html.twig */
class __TwigTemplate_8fa1df657e1432ef1d40ab4ff705771875ddc3ba444cb9acdea5cfb2c45eab68 extends Twig_Template
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
        echo "<section class=\"swag text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        <a href=\"#portfolio\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/swag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <section class="swag text-center">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-8 col-md-offset-2">*/
/*         {{ page.content }}*/
/*         <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
