<?php

/* ExamenSorterBundle:Default:index.html.twig */
class __TwigTemplate_1af2e51da4c23641d4025f0909d0dd38df19a3731a4b06b2f557918fe6011f0a extends Twig_Template
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
        $__internal_8f74a523fb77311a83bfc581a4e3fdf732dfa6ce29026d376d9b7507d0f033bc = $this->env->getExtension("native_profiler");
        $__internal_8f74a523fb77311a83bfc581a4e3fdf732dfa6ce29026d376d9b7507d0f033bc->enter($__internal_8f74a523fb77311a83bfc581a4e3fdf732dfa6ce29026d376d9b7507d0f033bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ExamenSorterBundle:Default:index.html.twig"));

        // line 1
        echo "Rango: ";
        echo twig_escape_filter($this->env, (isset($context["range"]) ? $context["range"] : $this->getContext($context, "range")), "html", null, true);
        echo " <br><br>
Lista de numeros a ordenar: ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["strRandList"]) ? $context["strRandList"] : $this->getContext($context, "strRandList")), "html", null, true);
        echo "<br><br>
La lista ordenada es: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["strSortList"]) ? $context["strSortList"] : $this->getContext($context, "strSortList")), "html", null, true);
        echo "
";
        
        $__internal_8f74a523fb77311a83bfc581a4e3fdf732dfa6ce29026d376d9b7507d0f033bc->leave($__internal_8f74a523fb77311a83bfc581a4e3fdf732dfa6ce29026d376d9b7507d0f033bc_prof);

    }

    public function getTemplateName()
    {
        return "ExamenSorterBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* Rango: {{ range }} <br><br>*/
/* Lista de numeros a ordenar: {{ strRandList }}<br><br>*/
/* La lista ordenada es: {{ strSortList }}*/
/* */
