<?php

/* manage.html */
class __TwigTemplate_7ecf7ecc21d61b2f00919f24def70f1a910e88247ab97fd6410efc7e5d79fb36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "manage.html", 1);
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
        echo "Home page";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
<div class=\"manageMain\">
   <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
      <h4 class=\"panel-title\">
        <a  data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          Вхід
        </a>
      </h4>
    </div>
    <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
      <div class=\"panel-body\" style=\"background-color: #F0F0F0;\">
        <form action=\"\" method=\"post\" class=\"login\" >
            <input type=\"text\" id=\"E-mail\" name=\"E-mail\" placeholder=\"E-mail\" autocomplete=\"off\" class=\"loginTxt\"><br><br>
            <input type=\"password\" id=\"pass\" name=\"pass\" placeholder=\"*******\" autocomplete=\"off\" class=\"passTxt\"><br><br>
            <input id=\"admission\" type=\"button\" class=\"orderBtn\" value=\"Вхід\">
            <script type=\"text/javascript\">
                \$(document).ready(function () {
                    \$(\"#admission\").click(function(){
                        if(\$(\"#E-mail\").val()==\"\"){
                           alert(\"Введіть E-mail\");
                        }
                        else if(\$(\"#pass\").val()==\"\"){
                            alert(\"Введіть пароль\");
                        }
                        if(\$(\"#E-mail\").val()!=\"\" && \$(\"#pass\").val()!=\"\"){
                           alert(\"sda\");
                        }
                    });
                });
            </script>
        </form>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
      <div class=\"panel-body\">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "manage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
