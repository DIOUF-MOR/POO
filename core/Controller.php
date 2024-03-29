<?php

namespace App\Core;

class Controller{

    protected Request $request;

        public function __construct(Request $request)
        {
            $this->request=$request;
        }

        public function render(string $path,array $data=[]){
            $data["Constantes"]=Constantes::class;
            $data['Request']=$this->request;
            ob_start();
            extract($data);
            require_once(Constantes::ROOT()."templates/".$path);
            $content_for_views=ob_get_clean();
            require_once(Constantes::ROOT()."templates/layout/base.html.php");
        }

        public function redirectToRoute($uri){

            header("location:".Constantes::WEB_ROOT.$uri);
        }
}