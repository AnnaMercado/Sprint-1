<?php

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