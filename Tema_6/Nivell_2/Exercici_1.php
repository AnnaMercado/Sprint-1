<?php

Crea una classe que representi un recurs didàctic d’aquesta especialitat. 
Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). 
Implementa tant el tema com el tipus de recurs amb enums.

enum Tema: string{
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case LARAVEL ='LARAVEL';
}

enum TipusRecurs: String{
    case FITXER ='FITXER';
    case ARTICLE = 'ARTICLE WEB';
    case VIDEO = 'VÍDEO';
}


class Recurs{
    public string $nom; 
    public Tema $tema;
    public string $url;
    public TipusRecurs $tipusRecurs;

    public function __constructor(string $nom, Tema $tema, string $url, TipusRecurs $tipusRecurs){
        $this->nom = $nom;
        $this->tema = $tema;
        $this->url = $url; 
        $this->tipusRecurs = $tipusRecurs;
    }
}

?>