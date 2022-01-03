<?php
App::uses('AppController', 'Controller');
/**
 * Syains Controller
 *
 * @property Syain $Syain
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class SyainsController extends AppController {
    
    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session', 'Flash');
    
    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Syain->recursive = 0;
        $this->set('syains', $this->Paginator->paginate());
    }
    
    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Syain->exists($id)) {
            throw new NotFoundException(__('Invalid syain'));
        }
        $options = array('conditions' => array('Syain.' . $this->Syain->primaryKey => $id));
        $this->set('syain', $this->Syain->find('first', $options));
    }
    
    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Syain->create();
            if ($this->Syain->save($this->request->data)) {
                $this->Flash->success(__('The syain has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The syain could not be saved. Please, try again.'));
            }
        }
    }
    
    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Syain->exists($id)) {
            throw new NotFoundException(__('Invalid syain'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Syain->save($this->request->data)) {
                $this->Flash->success(__('The syain has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The syain could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Syain.' . $this->Syain->primaryKey => $id));
            $this->request->data = $this->Syain->find('first', $options);
        }
    }
    
    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->Syain->exists($id)) {
            throw new NotFoundException(__('Invalid syain'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Syain->delete($id)) {
            $this->Flash->success(__('The syain has been deleted.'));
        } else {
            $this->Flash->error(__('The syain could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
