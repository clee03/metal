<?php

/* modular/contact.html.twig */
class __TwigTemplate_5b7deb0db21cd1a2b6e75f5a7251476726bd3a6e6c701522947f7dc45c130beb extends Twig_Template
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
        echo "<section class=\"dark-bg text-center section-padding contact-wrap\" id=\"get_in_touch\">
  <a href=\"#top\" class=\"up-btn\"><i class=\"fa fa-chevron-up\"></i></a>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "boxes", array()), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            echo "    <div class=\"row contact-details\">
      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "      <div class=\"col-md-4\">
        <div class=\"light-box box-hover\">
          <h2><i class=\"fa fa-";
                // line 15
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i><span>";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</span></h2>
          <p>";
                // line 16
                echo $this->getAttribute($context["item"], "description", array());
                echo "</p>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
      <div class=\"col-md-12\">
        <ul class=\"social-buttons\">
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "          <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" class=\"social-btn\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i></a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  81 => 27,  77 => 26,  71 => 22,  64 => 20,  54 => 16,  48 => 15,  44 => 13,  40 => 12,  37 => 11,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/* <section class="dark-bg text-center section-padding contact-wrap" id="get_in_touch">*/
/*   <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         {{ page.content }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {% for row in page.header.boxes|batch(3) %}*/
/*     <div class="row contact-details">*/
/*       {% for item in row %}*/
/*       <div class="col-md-4">*/
/*         <div class="light-box box-hover">*/
/*           <h2><i class="fa fa-{{ item.icon }}"></i><span>{{ item.title }}</span></h2>*/
/*           <p>{{ item.description }}</p>*/
/*         </div>*/
/*       </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <ul class="social-buttons">*/
/*           {% for item in page.header.social %}*/
/*           <li><a href="{{ item.url }}" class="social-btn"><i class="fa fa-{{ item.icon }}"></i></a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
