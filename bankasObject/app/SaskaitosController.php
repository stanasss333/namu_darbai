<?php

namespace Saskaitos;
use Plan1\Planas1;

class SaskaitosController implements Planas1 {


    public function saskaituTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('pagrindinis');
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
        return App::view('prideti-saskaita');
    }

    public function save()
    {
        $saskaita = ['id' => rand(10000000, 99999999), 'amount' => 0]; // be garantiju unikalumui
        Json::getJson()->create($saskaita);
        App::redirect();
    }



}