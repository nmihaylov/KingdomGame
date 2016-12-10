<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7ab6af99afabfffcc047e984b7bb55f4cbf329d91e2d497ce7f7dda0f6495209 extends Twig_Template
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
        $__internal_08daaad3dd53a11efac564dd9cae8808b03cf7c8f9c099e1ff235cebc1950802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08daaad3dd53a11efac564dd9cae8808b03cf7c8f9c099e1ff235cebc1950802->enter($__internal_08daaad3dd53a11efac564dd9cae8808b03cf7c8f9c099e1ff235cebc1950802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_08daaad3dd53a11efac564dd9cae8808b03cf7c8f9c099e1ff235cebc1950802->leave($__internal_08daaad3dd53a11efac564dd9cae8808b03cf7c8f9c099e1ff235cebc1950802_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
