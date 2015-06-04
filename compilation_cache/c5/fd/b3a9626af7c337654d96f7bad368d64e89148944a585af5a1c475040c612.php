<?php

/* index2.html */
class __TwigTemplate_c5fdb3a9626af7c337654d96f7bad368d64e89148944a585af5a1c475040c612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "index2.html", 1);
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
        echo "<div class=\"container-fluid\" style=\"padding:0\">
    <section class=\"section1\">
            <div class=\"row\">
            <div class=\"col-sm-4\">
                <h2 style=\"text-align:center;\"><b><i>Замовлення столиків</i></b></h2><br>
           <div class=\"textBlock\">
<span ><strong>Armadillo</strong> - сервіс для резервування столиків онлайн.</span>
                <hr style=\"border-color:black;\">
                <span>З розвитком інформаційних технологій та інтернету життя спростилось, а наш сервіс максимально спростить замовлення столиків, щоб ви цим надмірно не переймались. Просто виберіть заклад і місце.</span><br><br>
            <input type=\"button\" class=\"orderBtn\" value=\"ЗРЕЗЕРВУВАТИ\" onclick=\"\">            
            </div><br><br> 
            </div>
            <div class=\"col-sm-4\">
            <h2 style=\"text-align:center;\"><b><i>Замовлення страв додому</i></b></h2><br>
           <div class=\"textBlock\">
<span ><strong>Armadillo</strong> - сервіс для замовлення страв онлайн.</span>
                <hr style=\"border-color:black;\">
                <span>Ми пропонуємо вам можливість замовити страви з меню рестранів, які надають можливість доставки, якщо у них відсутня така послуга просто зателефонуйте менеджеру та знайдіть компроміс.</span><br><br>
            <input type=\"button\" class=\"orderBtn\" value=\"ЗАМОВИТИ\" onclick=\"\">            
            </div><br><br> 
            </div>
            <div class=\"col-sm-4\">
            <h2 style=\"text-align:center;\"><b><i>Реєстрація закладу</i></b></h2><br>
           <div class=\"textBlock\">
<span ><strong>Armadillo</strong> - сервіс для клієнтів та ресторанів</span>
                <hr style=\"border-color:black;\">
                 <span>Цей сервіс не лобіює інтереси конкретного закладу, ає відкритим для всіх бажаючих, як ресторанів так і споживачів. Створіть сторінку свого закладу та з легкістю адмініструйте її, додавайте фото та опис.</span><br><br>
            <input type=\"button\" class=\"orderBtn\" value=\"РЕЄЕСТРАЦІЯ\" onclick=\"\">            
            </div><br><br>
            </div>
            </div>
        </section>
              <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" style=\"min-width:100%;\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"img/r1.jpg\" alt=\"order\" style=\"min-width:100%; max-height:70%;\">
      <div class=\"carousel-caption\">
        <h3>Замовлення столиків</h3>
        <p style=\"font-size:1.2em;\">Легкий спосіб без зайвих проблем замовити столик у зручномудля вас ресторані.</p>
      </div>
    </div>

    <div class=\"item\">
      <img src=\"img/r2.jpg\" alt=\"menu\" style=\"min-width:100%; max-height:70%;\">
      <div class=\"carousel-caption\">
        <h3>Замовлення страв онлайн</h3>
        <p style=\"font-size:1.2em;\">Швидке замовлення страв у декілька \"кліків\" ;)</p>
      </div>
    </div>

    <div class=\"item\">
      <img src=\"img/r3.jpg\" alt=\"Flower\" style=\"min-width:100%; max-height:70%;\">
      <div class=\"carousel-caption\">
        <h3>Для власників та адміністраторів ресторанів</h3>
        <p>Включення ресторану до сервісу та адміністрування сторінки ресторану.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
         <section class=\"section2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h1>Мета проекту</h1>
                </div>
            </div>
        </div>  
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 text-center\">
                       <img src=\"img/growth.png\" alt=\"growth\">
                        <h3>Розвиток</h3>
                        <p>Основною метою проекту є і буде залишатись розвиток, дійсно крутих та креативних закладів.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 text-center\">
                         <img src=\"img/time.png\" alt=\"time\">
                        <h3>Час</h3>
                        <p>Також однією з цілей є заощадження часу,на таку тривіальну річ як замовлення столику.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 text-center\">
                         <img src=\"img/search.png\" alt=\"time\">
                        <h3>Пошук</h3>
                        <p>Сервіс дає змогу вибрати заклад з обраною специфікою</p>
                </div>
                <div class=\"col-lg-3 col-md-6 text-center\">
                         <img src=\"img/services.png\" alt=\"time\">
                        <h3>Сервіси</h3>
                        <p class=\"text-muted\">Доступ, до додаткових сервісів закладу</p>
                </div>
            </div>
        </div>
        </section>
    
    </div>       
";
    }

    public function getTemplateName()
    {
        return "index2.html";
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
