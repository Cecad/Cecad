<?php

namespace IDE\ToolsBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;

class FormsExtension extends \Twig_Extension
{

    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    public function getFunctions()
    {
        return array(
                'f_entrada' => new \Twig_Function_Method($this, 'f_entrada'),
        );
    }

    public function f_entrada($id, $nombre, $tipo, $titulo, $complemento, $valor="")
    {
    	if ($tipo!="textarea"){
			return '
				<div class="control-group">
					<label class="control-label" for="'.$id.'">
						'.$titulo.'
					</label>
					<div class="controls">
						<input name= "'.$nombre.'" type="'.$tipo.'" id="'.$id.'" '.$complemento.' value="'.$valor.'"/>
					</div>
				</div>
			';
    	}else{
			return '
				<div class="control-group">
					<label class="control-label" for="'.$id.'">
						'.$titulo.'
					</label>
					<div class="controls">
						<textarea name= "'.$nombre.'" id="'.$id.'" '.$complemento.'>'.$valor.'</textarea>
					</div>
				</div>
			';
    	}
    }

    public function getName()
    {
        return 'forms_extension';
    }


}
