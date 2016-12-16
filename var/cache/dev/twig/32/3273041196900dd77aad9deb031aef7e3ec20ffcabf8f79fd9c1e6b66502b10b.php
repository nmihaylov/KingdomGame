<?php

/* base.html.twig */
class __TwigTemplate_9c2631243bb0af02b79353aa74198e428f9a080ea2ae76b9f6aa9c69043b51f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a18744564ea99ea63e58cbeba1bc4d7ecb0310f86ea48d188c18de7cbb542968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18744564ea99ea63e58cbeba1bc4d7ecb0310f86ea48d188c18de7cbb542968->enter($__internal_a18744564ea99ea63e58cbeba1bc4d7ecb0310f86ea48d188c18de7cbb542968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 18
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 76
        echo "

<div class=\"container body-container\">
    ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "</div>

";
        // line 102
        $this->displayBlock('footer', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "
</body>
</html>
";
        
        $__internal_a18744564ea99ea63e58cbeba1bc4d7ecb0310f86ea48d188c18de7cbb542968->leave($__internal_a18744564ea99ea63e58cbeba1bc4d7ecb0310f86ea48d188c18de7cbb542968_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_df7036ad0307e2968e49dfbfbcdd7c338e6043d581a4211ed4fbbc1cfa0d9c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7036ad0307e2968e49dfbfbcdd7c338e6043d581a4211ed4fbbc1cfa0d9c7c->enter($__internal_df7036ad0307e2968e49dfbfbcdd7c338e6043d581a4211ed4fbbc1cfa0d9c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kingdom Game";
        
        $__internal_df7036ad0307e2968e49dfbfbcdd7c338e6043d581a4211ed4fbbc1cfa0d9c7c->leave($__internal_df7036ad0307e2968e49dfbfbcdd7c338e6043d581a4211ed4fbbc1cfa0d9c7c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_906e533dfefcf27502d48f0a558843f46468f9eb23924a9f55ddf038963247d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906e533dfefcf27502d48f0a558843f46468f9eb23924a9f55ddf038963247d0->enter($__internal_906e533dfefcf27502d48f0a558843f46468f9eb23924a9f55ddf038963247d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_906e533dfefcf27502d48f0a558843f46468f9eb23924a9f55ddf038963247d0->leave($__internal_906e533dfefcf27502d48f0a558843f46468f9eb23924a9f55ddf038963247d0_prof);

    }

    // line 18
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c1800b8b8b9e2e0fea81f109a4ee0cab100b9715c5213a93fc3d935a4d27b89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1800b8b8b9e2e0fea81f109a4ee0cab100b9715c5213a93fc3d935a4d27b89f->enter($__internal_c1800b8b8b9e2e0fea81f109a4ee0cab100b9715c5213a93fc3d935a4d27b89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_c1800b8b8b9e2e0fea81f109a4ee0cab100b9715c5213a93fc3d935a4d27b89f->leave($__internal_c1800b8b8b9e2e0fea81f109a4ee0cab100b9715c5213a93fc3d935a4d27b89f_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_931017f34450a11e0db59bf4c2bf9426809a93acc4505074b71b876be5666161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931017f34450a11e0db59bf4c2bf9426809a93acc4505074b71b876be5666161->enter($__internal_931017f34450a11e0db59bf4c2bf9426809a93acc4505074b71b876be5666161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("game_index");
        echo "\" class=\"navbar-brand\">Kingdoms</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 35
            echo "                        <ul class=\"nav navbar-nav navbar-left\">
                            ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("KingdomGameBundle:KingdomCurrent:resources"));
            // line 38
            echo "
                        </ul>
                    ";
        }
        // line 41
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 42
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 43
            echo "                            <li>
                                <a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kingdoms");
            echo "\">
                                    View all Kingdoms
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                    My Dashboard
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 59
            echo "                            <li>
                                <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 70
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_931017f34450a11e0db59bf4c2bf9426809a93acc4505074b71b876be5666161->leave($__internal_931017f34450a11e0db59bf4c2bf9426809a93acc4505074b71b876be5666161_prof);

    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        $__internal_c500d358b8416c29aa8818df308ba85a897c6b6f92f75dd53f3af878ef44be7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c500d358b8416c29aa8818df308ba85a897c6b6f92f75dd53f3af878ef44be7d->enter($__internal_c500d358b8416c29aa8818df308ba85a897c6b6f92f75dd53f3af878ef44be7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 80
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-12\">
                <div id=\"main\" class=\"col-sm-6 col-sm-offset-3\">
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 84
            echo "                        <div class=\"alert alert-dismissible alert-danger\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <strong>";
            // line 86
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 90
            echo "                        <div class=\"alert alert-dismissible alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <strong>";
            // line 92
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</strong>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                </div>
                ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "            </div>
        </div>
    ";
        
        $__internal_c500d358b8416c29aa8818df308ba85a897c6b6f92f75dd53f3af878ef44be7d->leave($__internal_c500d358b8416c29aa8818df308ba85a897c6b6f92f75dd53f3af878ef44be7d_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_badf6ae2e4634da4a07e140bc08a353aa66e75942f2be508a2c2c143673328b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badf6ae2e4634da4a07e140bc08a353aa66e75942f2be508a2c2c143673328b9->enter($__internal_badf6ae2e4634da4a07e140bc08a353aa66e75942f2be508a2c2c143673328b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_badf6ae2e4634da4a07e140bc08a353aa66e75942f2be508a2c2c143673328b9->leave($__internal_badf6ae2e4634da4a07e140bc08a353aa66e75942f2be508a2c2c143673328b9_prof);

    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        $__internal_44ee66fe914de3840334cc9958618ab0224abdc3a869f6d8cfd4357ae4fca420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ee66fe914de3840334cc9958618ab0224abdc3a869f6d8cfd4357ae4fca420->enter($__internal_44ee66fe914de3840334cc9958618ab0224abdc3a869f6d8cfd4357ae4fca420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 103
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Nikolay Mihaylov Kingdoms game</p>
        </div>
    </footer>
";
        
        $__internal_44ee66fe914de3840334cc9958618ab0224abdc3a869f6d8cfd4357ae4fca420->leave($__internal_44ee66fe914de3840334cc9958618ab0224abdc3a869f6d8cfd4357ae4fca420_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4b6708969d2c8f6daf9405804007f57fd9ce2e585564383f7c48ca532608500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b6708969d2c8f6daf9405804007f57fd9ce2e585564383f7c48ca532608500->enter($__internal_a4b6708969d2c8f6daf9405804007f57fd9ce2e585564383f7c48ca532608500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a4b6708969d2c8f6daf9405804007f57fd9ce2e585564383f7c48ca532608500->leave($__internal_a4b6708969d2c8f6daf9405804007f57fd9ce2e585564383f7c48ca532608500_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 112,  318 => 111,  312 => 110,  300 => 103,  294 => 102,  283 => 96,  274 => 97,  272 => 96,  269 => 95,  260 => 92,  256 => 90,  251 => 89,  242 => 86,  238 => 84,  234 => 83,  229 => 80,  223 => 79,  211 => 70,  203 => 65,  195 => 60,  192 => 59,  184 => 54,  176 => 49,  168 => 44,  165 => 43,  163 => 42,  160 => 41,  155 => 38,  153 => 36,  150 => 35,  148 => 34,  136 => 25,  130 => 21,  124 => 20,  113 => 18,  103 => 13,  97 => 12,  85 => 11,  75 => 114,  73 => 110,  70 => 109,  68 => 102,  64 => 100,  62 => 79,  57 => 76,  55 => 20,  50 => 18,  43 => 15,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Kingdom Game{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('game_index') }}\" class=\"navbar-brand\">Kingdoms</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    {% if app.user %}
                        <ul class=\"nav navbar-nav navbar-left\">
                            {{ render(controller(
                            'KingdomGameBundle:KingdomCurrent:resources'
                            )) }}
                        </ul>
                    {% endif %}
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                            <li>
                                <a href=\"{{ path('kingdoms') }}\">
                                    View all Kingdoms
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('dashboard') }}\">
                                    My Dashboard
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>
{% endblock %}


<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-12\">
                <div id=\"main\" class=\"col-sm-6 col-sm-offset-3\">
                    {% for flash_message in app.session.flashBag.get('error') %}
                        <div class=\"alert alert-dismissible alert-danger\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <strong>{{ flash_message }}</strong>
                        </div>
                    {% endfor %}
                    {% for flash_message in app.session.flashBag.get('notice') %}
                        <div class=\"alert alert-dismissible alert-success\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <strong>{{ flash_message }}</strong>
                        </div>
                    {% endfor %}
                </div>
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Nikolay Mihaylov Kingdoms game</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
