<?php
namespace App\Controller;

use App\Controller\AppController;

class TextareasController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index() {
        $this->viewBuilder()->layout('textareas');
        $this->set('title', 'Textareas');
    }

    public function view() {
        $textareas = $this->Textareas->find('all')->order(['position' => 'ASC']);
        $this->set([
            'textareas' => $textareas,
            '_serialize' => ['textareas']
        ]);
    }

    public function add() {
        $textarea = $this->Textareas->newEntity();
        $max_position = $this->Textareas->find('all')->count();
        $this->request->data('position', $max_position + 1);
        $textarea = $this->Textareas->patchEntity($textarea, $this->request->data);
        if ($this->Textareas->save($textarea)) {
            $this->set(compact('textarea'));
            $this->set('_serialize', ['textarea']);
        }
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $textarea = $this->Textareas->get($this->request->id);
        $this->Textareas->delete($textarea);
    }

    public function sort() {
        $sortings = array();
        parse_str($this->request->data('sorting'), $sortings);
        $sortings = $sortings['textarea'];
        $i = 1;
        foreach ($sortings as $id) {
            $this->Textareas->query()->update()->set(['position' => $i])->where(['id' => $id])->execute();
            $i++;
        }
    }

}