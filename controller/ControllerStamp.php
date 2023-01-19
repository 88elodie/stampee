<?php

class ControllerStamp {
    public function catalogue(){
        if(CheckSession::SessionConnected()){
            $session = 1;
        }else {
            $session = 0;
        }
        return Twig::render('stamp-catalogue.php', ['session' => $session]);
    }

    public function fiche(){
        if(CheckSession::SessionConnected()){
            $session = 1;
        }else {
            $session = 0;
        }
        return Twig::render('stamp-fiche.php', ['session' => $session]);
    }
}