<?php

/* ::base.html.twig */
class __TwigTemplate_9e593a14503ef13d154c1766ec90ca17c453c394a9d004aa840c4522805ec702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=utf-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
      
        
          <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
            <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 25
        $this->displayBlock('navigation', $context, $blocks);
        // line 34
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 37
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 38
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 46
        $this->displayBlock('sidebar', $context, $blocks);
        // line 47
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "            </div>
        </section>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 25
    public function block_navigation($context, array $blocks = array())
    {
        // line 26
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Главная</a></li>
                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">О нас</a></li>
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Контакты</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 37
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">my blog</a>";
    }

    // line 38
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 56,  174 => 51,  171 => 50,  166 => 46,  161 => 43,  153 => 38,  145 => 37,  137 => 30,  133 => 29,  129 => 28,  125 => 26,  122 => 25,  116 => 18,  112 => 16,  109 => 15,  103 => 8,  97 => 57,  95 => 56,  90 => 53,  88 => 50,  83 => 47,  81 => 46,  77 => 44,  75 => 43,  67 => 38,  63 => 37,  58 => 34,  56 => 25,  49 => 20,  47 => 15,  37 => 8,  28 => 1,);
    }
}
