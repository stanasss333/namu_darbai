<?php
namespace Bankas;
use App\DB\DataBase;

class Json implements DataBase {

    private $data;
    private static $obj;
    
    public static function getJson()
    {
        return self::$obj ?? self::$obj = new self;
    }
    
    private function __construct()
    {
        if (!file_exists(DIR.'/saskaitos.json')) {
            file_put_contents(DIR.'/saskaitos.json', json_encode([]));
        }
        $this->data = json_decode( file_get_contents(DIR.'/saskaitos.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(DIR.'/saskaitos.json', json_encode($this->data));
    }
    
    
    // box ['id' => 25, 'amount' => 258]
    
    
    public function create(array $saskaitaData) : void
    {
        $this->data[] = $saskaitaData;
    }

    public function update(int $saskaitaId, array $saskaitaData) : void
    {
        foreach ($this->data as $index => $saskaita) {
            if ($saskaita['id'] == $saskaitaId) {
                $this->data[$index] = $saskaitaData;
                return;
            }
        }
    } 

    public function delete(int $saskaitaId) : void
    {
        foreach ($this->data as $index => $saskaita) {
            if ($saskaita['id'] == $saskaitaId) {
                unset($this->data[$index]);
                return;
            }
        }
    } 

    public function show(int $saskaitaId) : array
    {
        foreach ($this->data as $index => $saskaita) {
            if ($saskaita['id'] == $saskaitaId) {
                return $this->data[$index];
            }
        }
    } 

    public function showAll() : array
    {
        return $this->data;
    }

}