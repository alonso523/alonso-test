<?php
App::uses('AppController', 'Controller');
/**
 * Information Controller
 *
 * @property Information $Information
 */
class InformationController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Information->recursive = 0;
		$this->set('information', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Information->id = $id;
		if (!$this->Information->exists()) {
			throw new NotFoundException(__('Invalid information'));
		}
		$this->set('information', $this->Information->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Information->create();
			if ($this->Information->save($this->request->data)) {
				$this->Session->setFlash(__('The information has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The information could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Information->Course->find('list');
		$this->set(compact('courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Information->id = $id;
		if (!$this->Information->exists()) {
			throw new NotFoundException(__('Invalid information'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Information->save($this->request->data)) {
				$this->Session->setFlash(__('The information has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The information could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Information->read(null, $id);
		}
		$courses = $this->Information->Course->find('list');
		$this->set(compact('courses'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Information->id = $id;
		if (!$this->Information->exists()) {
			throw new NotFoundException(__('Invalid information'));
		}
		if ($this->Information->delete()) {
			$this->Session->setFlash(__('Information deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Information was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
