<?php
interface Printer
{
    public function Myprint();
}

class ColorPrinter implements Printer
{
    public function Myprint()
    {
        echo "Printing colorfull immage <br>";
    }
}

class MonochromePrinter implements Printer
{
    public function Myprint()
    {
        echo "Printing black-white image... <br>";
    }
}

abstract class Typografer
{
    // Абстрактный метод, реализация которого
    // будет различаться у потомков, возвращает реализацию
    // интерфейса Printer
    abstract protected function PreparePrinter();

    public function PrintImage()
    {
        $printer = $this->PreparePrinter();
        $printer->Myprint();
    }
}

class ColorTypografer extends Typografer
{
    // Печатник подготоваливает цветной принтер
    protected function PreparePrinter()
    {
        return new ColorPrinter();
    }
}

class MonochromeTypografer extends Typografer
{
    // ЧБ печатник подготоваливает черно-белый принтер
    protected function PreparePrinter()
    {
        return new MonochromePrinter();
    }
}


$taskList = [new MonochromeTypografer(), new ColorTypografer(), new ColorTypografer(), new MonochromeTypografer()];
echo $taskList;
foreach ($taskList as $task) $task->PrintImage();
