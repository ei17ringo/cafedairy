<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

class DiariesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
        $this->loadComponent('Paginator');
    }

    public $paginate = array(
        'limit' => 5,
        'order' => array(
            'id' => 'desc'
        )
    );

    public function mypage()
    {
        $newtime = Time::now();
        // $newtime = $newtime->format('Y-m');
        $diaries = $this->paginate();
        $this->set(compact('diaries','newtime'));
    }

    public function home(){

    }

    public function view($id)
    {
        $diary = $this->Diaries->get($id);
        $this->set(compact('diary'));
    }

    public function calendar($id)
    {
        $this->set('diaries', $this->Diaries->find('all')); 
    }

    public function add()
    {
        $diary = $this->Diaries->newEntity();
        if ($this->request->is('post')) {
            $diary = $this->Diaries->patchEntity($diary, $this->request->data);

            if ($this->Diaries->save($diary)) {
                debug($this->request->data);
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'mypage']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('diary', $diary);
    }

}

