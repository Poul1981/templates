<?php
///реестр – это хэш, доступ к данным у которого осуществляется через статические методы
echo "<style>
        body
        {
            background-color: #bfe2e9;
        }  
      </style>";
interface Registration
{
    public static function set($key, $value);
    public static function get($key);
    public static function removeProduct($key);
}

class Registry implements Registration
{
    public function get_count(){
        print_r(count(self::$data));
    }
    protected static $data = [];

    /*добавляет значение в реестр*/
    public static function set($key, $value){
        self::$data[$key] = $value;
    }

    //Возвращает значение из реестра по ключу
    public static function get($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    //Удаляет значение из реестра по ключу
    public static function removeProduct($key)
    {
        if (array_key_exists($key, self::$data)){
            unset(self::$data[$key]);
        }
    }
}

$reg = new Registry();
$reg->get_count();
Registry::set('one', 'один');
Registry::set('two', '2');
Registry::set('three', '3');
Registry::set('fore', '4');
$reg->get_count();
echo Registry::get('one');

class Product
{
    protected $id;
    protected $name;
    protected $cost;

    public function __construct($id, $name, $cost){
        $this->id = $id;
        $this->name = $name;
        $this->cost = $cost;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return "название $this->name";
    }

    public function getCost()
    {
        return "стоимость - $this->cost$";
    }
}

class Factory
{
    protected static $products = [];

    public static function pushProduct(Product $product){
        self::$products[$product->getId()] = $product;
    }

    public static function getProducts($id)
    {
        return isset(self::$products[$id]) ? self::$products[$id] : new Product(0, 'null', 0);
    }

    public static function removeProduct($id){
        if (array_key_exists($id, self::$products)){
            unset(self::$products[$id]);
        }
    }
}
echo '<br>';
$car = new Product(1, 'ford', 5000);
$airplane = new Product(2, 'luxe', 1000000);
$bike = new Product(3, 'djim', 1000);
Factory::pushProduct($car);
Factory::pushProduct($airplane);
Factory::pushProduct($bike);
echo Factory::getProducts(1)->getName(); echo '<br>';
echo Factory::getProducts(1)->getCost(); echo '<br>';
echo Factory::getProducts(1)->getId(); echo '<br>';

echo Factory::getProducts(2)->getName();echo '<br>';
Factory::removeProduct(2);echo '<br>';
echo Factory::getProducts(2)->getName();echo '<br>';
