<?php

namespace Bankas;

class SaskaitosController {


    public function saskaituTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('index', ['saskaitos' => Json::getJson()->showAll()]);
    }
    public function add($id)
    {
        return App::view('pridetilesu', ['id' => $id]);
    }

    public function doAdd($id)
    {
        $id = (int) $id;
        $saskaita = Json::getJson()->show($id);
        $saskaita['Suma'] += (int) $_POST['suma'];
        Json::getJson()->update($id, $saskaita);
        App::redirect();
    }

    public function remove($id)
    {
        return App::view('nuskaiciuotilesas', ['id' => $id]);
    }

    public function doRemove($id)
    {
        $id = (int) $id;
        $saskaita = Json::getJson()->show($id);
        $saskaita['Suma'] -= (int) $_POST['suma'];
        Json::getJson()->update($id, $saskaita);
        App::redirect();
    }

    public function delete($id)
    {
        Json::getJson()->delete($id);
        App::redirect();
    }


    public function create()
    {

        return App::view('pridetisaskaita');
    }

    public function save()
    {
        $year = rand(0, 99);
        $newYear = '0'.$year;
        $goodYear = substr($newYear, -2);

        $month = rand(1, 12);
        $newMonth = '0'.$month;
        $goodMonth = substr($newMonth, -2);
 
        if($month % 2 == 0 || $month == 9 || $month == 11){
            if($month == 2) {
               $day == rand(1, 28);
            }
            $day = rand(1, 30);
        } 
        if($month % 2 !== 0 || $month == 8 || $month == 10 || $month == 12) {
           $day = rand(1, 31);
        }
        $newDay = '0'.$day;
        $goodDay = substr($newDay, -2);
        
        $number = 0;
        $new_number = number_format((float)$number, 2, '.', '');
        $saskaita =['Vardas' => vardas[rand(0, count($vardas)-1)], 'Pavarde' => pavarde[rand(0, count($pavarde)-1)], 'SaskaitosNr.' => 'LT'. rand(100000000000000000, 999999999999999999), 'AsmensKodas' => '3'. $goodYear. $goodMonth. $goodDay. rand(1000, 9999), 'Suma' => $new_number];
        Json::getJson()->create($saskaita);
        App::redirect();
    }



}