<?php
App::uses('AppController', 'Controller');
/**
 * CoursesNews Controller
 *
 * @property CoursesNews $CoursesNews
 */
class CoursesNewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoursesNews->recursive = 0;
		$this->set('coursesNews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CoursesNews->id = $id;
		if (!$this->CoursesNews->exists()) {
			throw new NotFoundException(__('Invalid courses news'));
		}
		$this->set('coursesNews', $this->CoursesNews->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoursesNews->create();
			if ($this->CoursesNews->save($this->request->data)) {
				$this->Session->setFlash(__('The courses news has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses news could not be saved. Please, try again.'));
			}
		}
		$courses = $this->CoursesNews->Course->find('list');
		$news = $this->CoursesNews->News->find('list');
		$this->set(compact('courses', 'news'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CoursesNews->id = $id;
		if (!$this->CoursesNews->exists()) {
			throw new NotFoundException(__('Invalid courses news'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoursesNews->save($this->request->data)) {
				$this->Session->setFlash(__('The courses news has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses news could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CoursesNews->read(null, $id);
		}
		$courses = $this->CoursesNews->Course->find('list');
		$news = $this->CoursesNews->News->find('list');
		$this->set(compact('courses', 'news'));
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
		$this->CoursesNews->id = $id;
		if (!$this->CoursesNews->exists()) {
			throw new NotFoundException(__('Invalid courses news'));
		}
		if ($this->CoursesNews->delete()) {
			$this->Session->setFlash(__('Courses news deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Courses news was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
