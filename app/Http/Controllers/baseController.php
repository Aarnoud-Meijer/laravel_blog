<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

trait baseController
{
    private $ajax   = NULL;

    // isXmlHttpRequest :: use $request->ajax()
    private function is_ajax(){                                                                                     // is_ajax -> router
        $header = 'HTTP_X_REQUESTED_WITH';
        if($this->ajax !== NULL){
                return $this->ajax;
        }elseif(!empty($_SERVER[$header]) && strtolower($_SERVER[$header]) == 'xmlhttprequest'){
                $this->ajax = true;
            //    return $this->ajax;
        } else {
                $this->ajax = false;
        }
        return $this->ajax;
        //return ( $this->ajax = (!empty($_SERVER[$header]) && strtolower($_SERVER[$header]) == 'xmlhttprequest') : true ; false;
    }
}
