<?php

namespace App\Controllers;


use App\Models\PhonebookModel;

class Main extends BaseController
{
    public function index()
    {
        $q = $this->request->getGet('q');

        $phonebooksModel = new PhonebookModel();

        if ($q) {
            $phonebooksModel->like('name', $q);
        }

        $phonebooks = $phonebooksModel->paginate(10);

        return view('main/index', [
            'title' => 'Главная страница',
            'phonebooks' => $phonebooks,
            'pager' => $phonebooksModel->pager,
        ]);
    }
}
