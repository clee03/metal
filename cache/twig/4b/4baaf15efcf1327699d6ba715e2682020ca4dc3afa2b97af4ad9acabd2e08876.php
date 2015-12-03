<?php

/* modular/services.html.twig */
class __TwigTemplate_4bc577065d8611079ff1720e38dfcbaa58e984db0523ecfa8ef90a438a6f1f85 extends Twig_Template
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
        echo "<section class=\"text-center\" id=\"responsive_design\">
  <div class=\"container-fluid nopadding responsive-services\">
    <div class=\"wrapper\">
      <div class=\"iphone\">
        <div class=\"wp3\"></div>
      </div>
      <div class=\"fluid-white\"></div>
    </div>
    <div class=\"container designs\">
      <div class=\"row\">
        <div class=\"col-md-5 col-md-offset-7\">
          <div id=\"servicesSlider\">
            <ul class=\"slides\">
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 15
            echo "              <li>
                <h1 class=\"arrow\">";
            // line 16
            echo $this->getAttribute($context["slide"], "title", array());
            echo "</h1>
                ";
            // line 17
            echo $this->getAttribute($context["slide"], "content", array());
            echo "
                ";
            // line 18
            if (($this->getAttribute($context["slide"], "link_url", array()) || $this->getAttribute($context["slide"], "link_text", array()))) {
                // line 19
                echo "                <p><a href=\"";
                echo $this->getAttribute($context["slide"], "link_url", array());
                echo "\" class=\"arrow-btn\">";
                echo $this->getAttribute($context["slide"], "link_text", array());
                echo " <i class=\"fa fa-long-arrow-right\"></i></a></p>
                ";
            }
            // line 21
            echo "              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  59 => 21,  51 => 19,  49 => 18,  45 => 17,  41 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* <section class="text-center" id="responsive_design">*/
/*   <div class="container-fluid nopadding responsive-services">*/
/*     <div class="wrapper">*/
/*       <div class="iphone">*/
/*         <div class="wp3"></div>*/
/*       </div>*/
/*       <div class="fluid-white"></div>*/
/*     </div>*/
/*     <div class="container designs">*/
/*       <div class="row">*/
/*         <div class="col-md-5 col-md-offset-7">*/
/*           <div id="servicesSlider">*/
/*             <ul class="slides">*/
/*               {% for slide in page.header.slides %}*/
/*               <li>*/
/*                 <h1 class="arrow">{{ slide.title }}</h1>*/
/*                 {{ slide.content }}*/
/*                 {% if slide.link_url or slide.link_text %}*/
/*                 <p><a href="{{ slide.link_url }}" class="arrow-btn">{{ slide.link_text }} <i class="fa fa-long-arrow-right"></i></a></p>*/
/*                 {% endif %}*/
/*               </li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
