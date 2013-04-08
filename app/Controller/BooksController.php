<?php
App::uses('AppController', 'Controller');
/**
 * Books Controller
 *
 * @property Book $Book
 */
class BooksController extends AppController {

/**
 * index method
 *
 * @return void
 */
 public function index() {
        $this->Book->recursive = 0;
        $this->set('books', $this->paginate());
    }
 public function beforeFilter() {
    $this->Auth->autoRedirect = false;
    parent::beforeFilter();
}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
		$this->set('book', $this->Book->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Book->create();
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
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
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
			$this->request->data = $this->Book->find('first', $options);
		}
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
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Book->delete()) {
			$this->Session->setFlash(__('Book deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Book was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

    public function presentation($id=null){

        if(isset($id)){

            switch($id){
                case 1:
                    $chapterArray = array(0.01,1,2,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23);
                    $chapterName = 'Marketing Is All Around Us';
                    break;
                case 2:
                    $chapterArray = array(24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,40,41,42,43,44,45,46);
                    $chapterName = 'The Marketing Plan';
                    break;
                case 3:
                    $chapterArray = array(50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71);
                    $chapterName = 'Political and Economical Analysis';
                    break;
                default:
                    break;
            }

            $this->set('chapter', $id);
            $this->set('chapterArray', $chapterArray);
            $this->set('chapterName', $chapterName);


        }else{
            echo "we should redirect to the chapter page here";
        }

    }
    public function chapters(){

        $this->set('chapters',array(array('Marketing Is All Around Us',1),array('The Marketing Plan',2),array('Political and Economical Analysis',3)));

    }
}
