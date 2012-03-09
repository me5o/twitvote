<?php
App::uses('AppController', 'Controller');

class VotesController extends AppController {

    public function index() {
        $this->Vote->recursive = 0;
        $this->set('votes', $this->paginate());
    }

    public function view($id = null) {
        $this->Vote->id = $id;
        if (!$this->Vote->exists()) {
            throw new NotFoundException(__('Invalid vote'));
        }
        $this->set('vote', $this->Vote->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Vote->create();
            if ($this->Vote->save($this->request->data)) {
                $this->Session->setFlash(__('The vote has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vote could not be saved. Please, try again.'));
            }
        }
        $users = $this->Vote->User->find('list');
        $voteTypes = $this->Vote->VoteType->find('list');
        $statuses = $this->Vote->Status->find('list');
        $this->set(compact('users', 'voteTypes', 'statuses'));
    }

    public function edit($id = null) {
        $this->Vote->id = $id;
        if (!$this->Vote->exists()) {
            throw new NotFoundException(__('Invalid vote'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Vote->save($this->request->data)) {
                $this->Session->setFlash(__('The vote has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The vote could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Vote->read(null, $id);
        }
        $users = $this->Vote->User->find('list');
        $voteTypes = $this->Vote->VoteType->find('list');
        $statuses = $this->Vote->Status->find('list');
        $this->set(compact('users', 'voteTypes', 'statuses'));
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Vote->id = $id;
        if (!$this->Vote->exists()) {
            throw new NotFoundException(__('Invalid vote'));
        }
        if ($this->Vote->delete()) {
            $this->Session->setFlash(__('Vote deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Vote was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
