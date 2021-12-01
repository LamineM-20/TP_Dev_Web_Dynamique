<?php
    function capital($string) {
        switch($string) {
        case'Italie': 
            return 'Rome';
        case'France': 
            return 'Paris';
        case'Sénégal': 
             return 'Dakar';
        case'Mali':
            return 'Bamako';
        case'Portugal': 
            return 'Lisbonne';
        case'Allemagne': 
            return 'Berlin';
        case'Maroc': 
            return 'Rabat';
        case'Espagne': 
            return 'Madrid';
        case'Angleterre': 
            return 'Londres';
        default: 
        return 'Pays non reconnu';
        }
    }
    echo capital("Angleterre");
?>