<?php
    $imageNull = 0;
    $verImage = 30;
    for ($i=1; $i <=$verImage ; $i++):
        if ($modulo=="vendas"){
            if($i>9){
                $image = $urlImageVendas.$codimobiliaria.'_'.$codImovel.'_'.$i.'.jpg';
            } else {
                $image = $urlImageVendas.$codimobiliaria.'_'.$codImovel.'_0'.$i.'.jpg';
            }

        } else if ($modulo=="aluguel") {
            if($i>9){
                $image = $urlImageAluguel.$codimobiliaria.'_'.$codImovel.'_'.$i.'.jpg';
            }else{
                $image = $urlImageAluguel.$codimobiliaria.'_'.$codImovel.'_0'.$i.'.jpg';
            }
        }
        if (!url_exists($image)) {
            $imageNull ++; 
            if($i==1){
             $image = URL::getBase();
             $image .= "assets/img/imovel_sem_imagem.jpg";
            }
        }
    endfor;
    $totalImabesImovel = $verImage-$imageNull;
    //print $totalImabesImovel;
?>