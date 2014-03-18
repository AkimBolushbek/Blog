<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_ad60722b736730f35745c3ed3ead9bd0f1dc47f548aede419de6eb3654402536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "О нас";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>About Me</h1>
    </header>
    <article>
        <p>1992 yılında Kırgızistan’ın Oş bölgesinde doğdum. 
            1998 – 2009 yıllar arası Lomonosov adında lıseyi tamamladım.
            2009 – 2010  eğitim-öğretim  yılında Oş Tehnoloji Üniversitesinde okudum. 
            2010 yılında Kırgızistan-Türkiye Manas Üniversitesini  kazandım ve ilk sene
            Türkçe hazırlık sınıfını bitirdim. 
            2011 yılından bu yana aynı üniversitede Bilgisayar Mühendisliği  Bölümünde lisans görmekteyim. 
            2013 yılı bahar dönemi eğitimini Öğrenci Değişim Programı yardımıyla Türkiye’nin 
            Gazi  Üniversitesinde aldım.</br>C++,  C#, Java, Delphi, SQL, PHP programlama dillerini öğrendim.</br> 
            OOP, MVC, SVN,  VCS, .. tehnolojilerinin yardımıyla progrmlar yapabiliyorum.</br>
            Hobbilerim: Kayak yapmak, yüzmek, film seyretmek, haber okumak.</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  29 => 4,);
    }
}
