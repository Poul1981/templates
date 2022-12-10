<?php
///реестр – это хэш, доступ к данным у которого осуществляется через статические методы
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

    public function __construct($id){
        $this->$id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
