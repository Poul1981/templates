<?php

interface Page
{
    public function createPage();
}

class TXT implements Page
{
    private $heigt;
    private $width;
    public function __construct($heigt, $width){
        $this->heigt = $heigt;
        $this->width = $width;
    }
    public function createPage()
    {
        echo "new ". __CLASS__ ." page ". $this->width ." ". $this->heigt;
    }
}

class PDF implements Page
{

    public function createPage()
    {
        echo "new ". __CLASS__ ." page";
    }
}

class HTML implements Page
{

    public function createPage()
    {
        echo "new ". __CLASS__ ." page";
    }
}

class MakeDiplom
{
    protected $heigt;
    protected $width;
    public function __construct($heigt, $width){
        $this->heigt = $heigt;
        $this->width = $width;
    }

    public function getPage($type){
        switch ($type){
            case "pdf": return new PDF();
            case "html": return new HTML();
            case "txt": return new TXT($this->heigt, $this->width);
            default: throw new Exception();
        }
    }
}


//$txt = MakeDiplom::getPage('txt');
//$pdf = MakeDiplom::getPage('pdf');
//$html = MakeDiplom::getPage('html');

$diplom = new MakeDiplom(12, 23);
$txt = $diplom->getPage('txt');
$pdf = $diplom->getPage('pdf');
$html = $diplom->getPage('html');

$pdf->createPage(); echo '<br>';
$html->createPage(); echo '<br>';
$txt->createPage(); echo '<br>';