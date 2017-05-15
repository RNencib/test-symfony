<?php

/* base.html.twig */
class __TwigTemplate_8b9af363f79570f54baa8c6ff66ed3fd291fa90ae054c39ca27af4c2c64f332b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_150543a0130a6b2efd28abde78f87b1a05282c9ee9d9f3e55b78c8e5006c3a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150543a0130a6b2efd28abde78f87b1a05282c9ee9d9f3e55b78c8e5006c3a53->enter($__internal_150543a0130a6b2efd28abde78f87b1a05282c9ee9d9f3e55b78c8e5006c3a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9bfb4465180428adc9a445601580f24c8b5124ac25594c6242285eda8b571ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfb4465180428adc9a445601580f24c8b5124ac25594c6242285eda8b571ff8->enter($__internal_9bfb4465180428adc9a445601580f24c8b5124ac25594c6242285eda8b571ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_150543a0130a6b2efd28abde78f87b1a05282c9ee9d9f3e55b78c8e5006c3a53->leave($__internal_150543a0130a6b2efd28abde78f87b1a05282c9ee9d9f3e55b78c8e5006c3a53_prof);

        
        $__internal_9bfb4465180428adc9a445601580f24c8b5124ac25594c6242285eda8b571ff8->leave($__internal_9bfb4465180428adc9a445601580f24c8b5124ac25594c6242285eda8b571ff8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e30503d877ad03d2dcc624a363c77d290e8aff47170c83801c60c2c8053b3d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30503d877ad03d2dcc624a363c77d290e8aff47170c83801c60c2c8053b3d57->enter($__internal_e30503d877ad03d2dcc624a363c77d290e8aff47170c83801c60c2c8053b3d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abedbcb9f28454761af67d5371a2b6bccc1c1187f32633882e35f7709765df1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abedbcb9f28454761af67d5371a2b6bccc1c1187f32633882e35f7709765df1b->enter($__internal_abedbcb9f28454761af67d5371a2b6bccc1c1187f32633882e35f7709765df1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_abedbcb9f28454761af67d5371a2b6bccc1c1187f32633882e35f7709765df1b->leave($__internal_abedbcb9f28454761af67d5371a2b6bccc1c1187f32633882e35f7709765df1b_prof);

        
        $__internal_e30503d877ad03d2dcc624a363c77d290e8aff47170c83801c60c2c8053b3d57->leave($__internal_e30503d877ad03d2dcc624a363c77d290e8aff47170c83801c60c2c8053b3d57_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e72fc36cafa9a8d4409fd64211ec0cf4b5ef1ec5463b82514115f08dd12b38a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72fc36cafa9a8d4409fd64211ec0cf4b5ef1ec5463b82514115f08dd12b38a0->enter($__internal_e72fc36cafa9a8d4409fd64211ec0cf4b5ef1ec5463b82514115f08dd12b38a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eae12c8fbdf09611a5e9c85c222b56925b2b4ee0361e298dcae8ef9024e4dbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae12c8fbdf09611a5e9c85c222b56925b2b4ee0361e298dcae8ef9024e4dbd7->enter($__internal_eae12c8fbdf09611a5e9c85c222b56925b2b4ee0361e298dcae8ef9024e4dbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eae12c8fbdf09611a5e9c85c222b56925b2b4ee0361e298dcae8ef9024e4dbd7->leave($__internal_eae12c8fbdf09611a5e9c85c222b56925b2b4ee0361e298dcae8ef9024e4dbd7_prof);

        
        $__internal_e72fc36cafa9a8d4409fd64211ec0cf4b5ef1ec5463b82514115f08dd12b38a0->leave($__internal_e72fc36cafa9a8d4409fd64211ec0cf4b5ef1ec5463b82514115f08dd12b38a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdc11719489fa3f33ef07a3614d7e1f2c6eb7fb018cc412fcbfc9a2f44298f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc11719489fa3f33ef07a3614d7e1f2c6eb7fb018cc412fcbfc9a2f44298f98->enter($__internal_cdc11719489fa3f33ef07a3614d7e1f2c6eb7fb018cc412fcbfc9a2f44298f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f55c2170e63ff2a1bc58d3009ac63a117a87f0d8e0664310e3e5973f3ba0375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f55c2170e63ff2a1bc58d3009ac63a117a87f0d8e0664310e3e5973f3ba0375->enter($__internal_6f55c2170e63ff2a1bc58d3009ac63a117a87f0d8e0664310e3e5973f3ba0375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f55c2170e63ff2a1bc58d3009ac63a117a87f0d8e0664310e3e5973f3ba0375->leave($__internal_6f55c2170e63ff2a1bc58d3009ac63a117a87f0d8e0664310e3e5973f3ba0375_prof);

        
        $__internal_cdc11719489fa3f33ef07a3614d7e1f2c6eb7fb018cc412fcbfc9a2f44298f98->leave($__internal_cdc11719489fa3f33ef07a3614d7e1f2c6eb7fb018cc412fcbfc9a2f44298f98_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95444e94964def8ab0734a335f2b0a0c871a19e22ca4092ee895a5e2b8f8a884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95444e94964def8ab0734a335f2b0a0c871a19e22ca4092ee895a5e2b8f8a884->enter($__internal_95444e94964def8ab0734a335f2b0a0c871a19e22ca4092ee895a5e2b8f8a884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d2f7d09a8c4fc5fdf2adea9d4107c9a074dcd3f8b1cc06e79cc1a5a70c7b840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2f7d09a8c4fc5fdf2adea9d4107c9a074dcd3f8b1cc06e79cc1a5a70c7b840->enter($__internal_5d2f7d09a8c4fc5fdf2adea9d4107c9a074dcd3f8b1cc06e79cc1a5a70c7b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5d2f7d09a8c4fc5fdf2adea9d4107c9a074dcd3f8b1cc06e79cc1a5a70c7b840->leave($__internal_5d2f7d09a8c4fc5fdf2adea9d4107c9a074dcd3f8b1cc06e79cc1a5a70c7b840_prof);

        
        $__internal_95444e94964def8ab0734a335f2b0a0c871a19e22ca4092ee895a5e2b8f8a884->leave($__internal_95444e94964def8ab0734a335f2b0a0c871a19e22ca4092ee895a5e2b8f8a884_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
