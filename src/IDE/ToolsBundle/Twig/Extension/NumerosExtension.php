<?php

namespace IDE\ToolsBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;

class NumerosExtension extends \Twig_Extension
{

    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function getFunctions()
    {
        return array(
                'moneda' => new \Twig_Function_Method($this, 'moneda'),
        );
    }

    public function moneda($number, $decimals = 2, $decPoint = ',', $thousandsSep = '.')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$ '.$price;

    	if ($number<0){
			return "<span style='color:red;'>".$price."</span>";
    	}
        return $price;
    }

    public function getName()
    {
        return 'numeros_extension';
    }


}
