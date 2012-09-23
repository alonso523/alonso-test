<?php
App::uses('AppController', 'Controller');
/**
 * CoursesInformations Controller
 *
 * @property CoursesInformation $CoursesInformation
 */
class CoursesInformationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoursesInformation->recursive = 0;
		$this->set('coursesInformations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CoursesInformation->id = $id;
		if (!$this->CoursesInformation->exists()) {
			throw new NotFoundException(__('Invalid courses information'));
		}
		$this->set('coursesInformation', $this->CoursesInformation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoursesInformation->create();
			if ($this->CoursesInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The courses information has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses information could not be saved. Please, try again.'));
			}
		}
		$courses = $this->CoursesInformation->Course->find('list');
		$information = $this->CoursesInformation->Information->find('list');
		$this->set(compact('courses', 'information'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CoursesInformation->id = $id;
		if (!$this->CoursesInformation->exists()) {
			throw new NotFoundException(__('Invalid courses information'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoursesInformation->save($this->request->data)) {
				$this->Session->setFlash(__('The courses information has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses information could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CoursesInformation->read(null, $id);
		}
		$courses = $this->CoursesInformation->Course->find('list');
		$information = $this->CoursesInformation->Information->find('list');
		$this->set(compact('courses', 'information'));
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
		$this->CoursesInformation->id = $id;
		if (!$this->CoursesInformation->exists()) {
			throw new NotFoundException(__('Invalid courses information'));
		}
		if ($this->CoursesInformation->delete()) {
			$this->Session->setFlash(__('Courses information deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Courses information was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
