<?php

/* partials/footer.html.twig */
class __TwigTemplate_49e0316020a72b599f4eeb61b87f228cb7c630dd6006fe94178f9c2cfb92529b extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "links", array())) {
            // line 5
            echo "    <div class=\"col-md-6\">
      <ul class=\"legals\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "      </ul>
    </div>
    ";
        }
        // line 13
        echo "    <div class=\"col-md-6 credit\">
      <p>Designed &amp; Developed by <a href=\"http://www.peterfinlan.com/\">Peter Finlan</a> exclusively for <a href=\"http://tympanus.net/codrops/\"><em>Codrops</em></a></p>
    </div>
  </div>
</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  45 => 10,  34 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*     {% if site.footer.links %}*/
/*     <div class="col-md-6">*/
/*       <ul class="legals">*/
/*         {% for item in site.footer.links %}*/
/*         <li><a href="{{ item.url }}">{{ item.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="col-md-6 credit">*/
/*       <p>Designed &amp; Developed by <a href="http://www.peterfinlan.com/">Peter Finlan</a> exclusively for <a href="http://tympanus.net/codrops/"><em>Codrops</em></a></p>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </footer>*/
/* */
