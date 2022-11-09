<?php
    namespace App\utilitaires;

    class Date{
        public function isweekend()
        {
            return date('N')>=6;
        }
    }
?>