<?php

/* edit.html */
class __TwigTemplate_42cb9af83050f84d6c3309d4db0cff35720c8b3fcb890579a86be8a4e330fce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "edit.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Edit page";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<br/>
<div class=\"container-fluid\">
    <script>
        setInterval(function(){
            \$( \"#infoLogin\" ).hide( \"fold\", { direction: \"up\" }, 'slow' );
        },3000)
    </script>
    <div id=\"infoLogin\" class=\"alert alert-info\" >Ви ввійшли як адмнінстратор ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</div><br/><br/>
    <input id=\"name\" class=\"underline\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
    <input type=\"radio\" class=\"radio\" id=\"radio\" />
    <label for=\"radio\">А я переключаю радиокнопку</label><br/><br/>
    <textarea>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["descript"]) ? $context["descript"] : null), "html", null, true);
        echo "</textarea>
</div>

";
    }

    public function getTemplateName()
    {
        return "edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  51 => 14,  47 => 13,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
