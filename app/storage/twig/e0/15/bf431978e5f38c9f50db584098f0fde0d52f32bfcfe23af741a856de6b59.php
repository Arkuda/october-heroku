<?php

/* /vagrant/themes/demo/partials/explain/plugins.htm */
class __TwigTemplate_e015bf431978e5f38c9f50db584098f0fde0d52f32bfcfe23af741a856de6b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_a6f1591a088be10c9f27c08324462f47a9b3c16928bc0b5b18346213ad989f66' => array($this, 'block___internal_a6f1591a088be10c9f27c08324462f47a9b3c16928bc0b5b18346213ad989f66'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<p class=\"lead\">
    <i class=\"icon-copy\"></i>
    The HTML markup for this example:
</p>
<pre>
";
        // line 8
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_a6f1591a088be10c9f27c08324462f47a9b3c16928bc0b5b18346213ad989f66", $context, $blocks));
        // line 10
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-question\"></i> 
    Wait, only one line is needed?
</p>
<p><em>Yes!</em> unlike the <a href=\"";
        // line 18
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">AJAX example</a>, components are simple building blocks that can be used with a small amount of code.</p>
<p>The <code>demoTodo</code> component used here is provided by the plugin called <strong>October\\Demo</strong>, you can find it in the <code>plugins/october/demo</code> folder.</p>

<hr />

<div class=\"text-center\">
    <p><a target=\"_blank\" href=\"http://octobercms.com/docs\" class=\"btn btn-lg btn-default\">Learn more at October's Documentation</a></p>
</div>";
    }

    // line 8
    public function block___internal_a6f1591a088be10c9f27c08324462f47a9b3c16928bc0b5b18346213ad989f66($context, array $blocks = array())
    {
        // line 9
        echo "{% component 'demoTodo' %}";
        echo "
";
    }

    public function getTemplateName()
    {
        return "/vagrant/themes/demo/partials/explain/plugins.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  53 => 8,  41 => 18,  31 => 10,  29 => 8,  20 => 1,  26 => 3,  22 => 2,  42 => 17,  37 => 14,  33 => 13,  19 => 1,);
    }
}
