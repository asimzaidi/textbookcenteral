<?php
App::uses('AppController', 'Controller');
/**
 * Scans Controller
 *
 * @property Scan $Scan
 */
class ScansController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Scan->recursive = 0;
		$this->set('scans', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Scan->exists($id)) {
			throw new NotFoundException(__('Invalid scan'));
		}
		$options = array('conditions' => array('Scan.' . $this->Scan->primaryKey => $id));
		$this->set('scan', $this->Scan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Scan->create();
			if ($this->Scan->save($this->request->data)) {
				$this->Session->setFlash(__('The scan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scan could not be saved. Please, try again.'));
			}
		}
		$books = $this->Scan->Book->find('list');
		$this->set(compact('books'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Scan->exists($id)) {
			throw new NotFoundException(__('Invalid scan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Scan->save($this->request->data)) {
				$this->Session->setFlash(__('The scan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Scan.' . $this->Scan->primaryKey => $id));
			$this->request->data = $this->Scan->find('first', $options);
		}
		$books = $this->Scan->Book->find('list');
		$this->set(compact('books'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Scan->id = $id;
		if (!$this->Scan->exists()) {
			throw new NotFoundException(__('Invalid scan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Scan->delete()) {
			$this->Session->setFlash(__('Scan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Scan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
