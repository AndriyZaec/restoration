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
       <div id=\"errorLogin\" class=\"alert alert-danger\" style=\"display:none;\"></div>
        <form id=\"loginForm\" action=\"edit.php\" method=\"post\" class=\"login\" >
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
                            var emailLog = \$(\"#E-mail\").val();
                            var passLog = \$(\"#pass\").val();
                            \$.post(\"assets/loginCheck.php\", { e_mail: emailLog, pass:passLog },function(data) {
                                 if(data==\"dec\"){     
                                    \$(\"#errorLogin\").show();
                                    \$(\"#errorLogin\").html(\"E-mail або пароль введений невірно.\");
                                }else if(data==\"confirm\"){
                                    \$(\"#loginForm\").submit();
                                }
                         });
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
          Реєстрація
        </a>
      </h4>
    </div>
    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
      <div class=\"panel-body\">
        <form id=\"regForm\" action=\"assets/reg.php\" method=\"post\" class=\"registration\" enctype=\"multipart/form-data\">
             <div id=\"error\" class=\"alert alert-danger\" style=\"display:none;\"></div>
            <input type=\"email\" id=\"regE-mail\" name=\"regE-mail\" placeholder=\"E-mail\" autocomplete=\"off\" class=\"regLoginTxt\"> *<br><br>
            <input type=\"password\" id=\"regPass\" name=\"regPass\" placeholder=\"Пароль\" autocomplete=\"off\" class=\"regPassTxt\"> *<br><br>
             <input type=\"password\" id=\"regValidPass\" name=\"regValidPass\" placeholder=\"Пітвердження паролю\" autocomplete=\"off\" class=\"regPassTxt\"> *<br><br>
             <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Назва закладу\" autocomplete=\"off\" class=\"regLoginTxt\"> *<br><br>
           <input id=\"photos\" name=\"photo0\" type=\"file\" accept=\"image/jpeg, image/png, image/gif\"><br>
            <input id=\"photos\" name=\"photo1\" type=\"file\" accept=\"image/jpeg, image/png, image/gif\"><br>
             <input id=\"photos\" name=\"photo2\" type=\"file\" accept=\"image/jpeg, image/png, image/gif\"><br>
           <textarea rows=\"10\" id=\"descript\" name=\"descript\" placeholder=\"Опис\"></textarea><br>
            <input name=\"registration\" id=\"registration\" type=\"button\" class=\"orderBtn\" value=\"Зареєструватись\">
            <script>
                \$(\"#registration\").click(function(){
                if(\$(\"#regE-mail\").val()==\"\"){
                      \$(\"#error\").show();
                      \$(\"#error\").html(\"Введіть E-mail.\");
                }else{     
                    if(\$(\"#regPass\").val().length < 6){
                         \$(\"#error\").show();
                        \$(\"#error\").html(\"Пароль має містити не менше 6 символів.\");
                    }
                    else{
                        if(\$(\"#regPass\").val()!=\$(\"#regValidPass\").val()){
                             \$(\"#error\").show();
                            \$(\"#error\").html(\"Паролі не співпадають.\");
                        }else{
                           if(\$(\"#name\").val()==\"\"){
                               \$(\"#error\").show();
                               \$(\"#error\").html(\"Введіть назву закладу.\");
                           }else{
                               var email = \$(\"#regE-mail\").val(); 
                               \$.post(\"assets/regCheck.php\", { e_mail: email },
                                function(data) {
                                if(data==\"dec\"){     
                                    \$(\"#error\").show();
                                    \$(\"#error\").html(\"E-mail зайнятий.\");
                                }else if(data==\"confirm\"){
                                    \$(\"#regForm\").submit();
                                }
                                });
                            }
                        }
                    } 
                }
                })
            </script>
        </form>
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
