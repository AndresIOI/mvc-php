<?php

    class View {
        public function render($vista){
            require 'views/'.$vista.'.php';
        }
    }