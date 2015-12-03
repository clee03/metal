<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_8ad057c704c671759afafd3b534f776091e25de3e04af7e80d7f60dfcda9814b extends Twig_Template
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
        echo "<section class=\"portfolio text-center section-padding\" id=\"portfolio\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      <h1> ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo " </h1>
      <div id=\"portfolioSlider\">
        <ul class=\"slides\">
          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolio", array()), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 9
            echo "          <li>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "            <div class=\"col-md-4 wp4 ";
                if ($this->getAttribute($context["item"], "delay", array())) {
                    echo "delay-";
                    echo $this->getAttribute($context["item"], "delay", array());
                    echo "s";
                }
                echo "\">
              <div class=\"overlay-effect effects clearfix\">
                <div class=\"img\">
                  <img src=\"";
                // line 14
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "url", array());
                echo "\" alt=\"Portfolio Item\">
                  <div class=\"overlay\">
                    <a href=\"";
                // line 16
                echo $this->getAttribute($context["item"], "img_url", array());
                echo "\" class=\"expand\"><i class=\"fa fa-search\"></i><br>";
                echo $this->getAttribute($context["item"], "img_text", array());
                echo "</a>
                    <a class=\"close-overlay hidden\">x</a>
                  </div>
                </div>
              </div>
              <h2>";
                // line 21
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h2>
              <p>";
                // line 22
                echo $this->getAttribute($context["item"], "content", array());
                echo "</p>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  84 => 25,  75 => 22,  71 => 21,  61 => 16,  56 => 14,  45 => 11,  41 => 10,  38 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <section class="portfolio text-center section-padding" id="portfolio">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {{ page.content }}*/
/*       <h1> {{ page.title }} </h1>*/
/*       <div id="portfolioSlider">*/
/*         <ul class="slides">*/
/*           {% for row in page.header.portfolio|batch(3) %}*/
/*           <li>*/
/*             {% for item in row %}*/
/*             <div class="col-md-4 wp4 {% if item.delay %}delay-{{ item.delay }}s{% endif %}">*/
/*               <div class="overlay-effect effects clearfix">*/
/*                 <div class="img">*/
/*                   <img src="{{ page.media[item.img].url }}" alt="Portfolio Item">*/
/*                   <div class="overlay">*/
/*                     <a href="{{ item.img_url }}" class="expand"><i class="fa fa-search"></i><br>{{ item.img_text }}</a>*/
/*                     <a class="close-overlay hidden">x</a>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <h2>{{ item.title }}</h2>*/
/*               <p>{{ item.content }}</p>*/
/*             </div>*/
/*             {% endfor %}*/
/*           </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
