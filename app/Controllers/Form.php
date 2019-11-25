<?php

namespace App\Controllers;

use App\Models\WorldModel;
use CodeIgniter\HTTP\URI;

class Form extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function saveform()
    {
        $world = new WorldModel($db);
        $request = \Config\Services::request();
        $itemData = array(
            'Name' => $request->getPostGet('Name'),
            'CountryCode' => $request->getPostGet('CountryCode'),
            'District' => $request->getPostGet('District'),
            'Population' => $request->getPostGet('Population'),
        );
        if ($world->insert($itemData) === false) {
            var_dump($world->errors());
            return view('Header') . view('Form/FormIndex') . view('Footer');
            var_dump($request->uri->getSegment(2));
        }
        $itemData = array();
        $data = $world->where('CountryCode', 'AFG')->findAll(10, 0);
        $arrayData = array('data' => $data);
        return view('Header') . view('Body', $arrayData) . view('Footer'). view('Modal/ModalUpdate');
    }

    public function update()
    {
        $world = new WorldModel($db);
        $request = \Config\Services::request();
        $id = $request->getPostGet('ID');
        $data = $world->find([$id]);
        $arrayData = array('data' => $data);
        return view('Header') . view('Body') . view('Footer'). view('Modal/ModalUpdate', $arrayData);
    }

    public function index()
    {
        return view('Header') . view('Form/FormIndex') . view('Footer');
    }
}
