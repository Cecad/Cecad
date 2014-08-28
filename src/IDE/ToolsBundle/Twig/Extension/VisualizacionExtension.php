<?php

namespace IDE\ToolsBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;

class VisualizacionExtension extends \Twig_Extension
{

    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function getFunctions()
    {
        return array(
                'label_value' => new \Twig_Function_Method($this, 'label_value'),
        );
    }

    public function label_value($label, $value)
    {
        return "<strong>".$label.": </strong> ".$value."<br/>";
    }

    public function getName()
    {
        return 'visualizacion_extension';
    }


}
