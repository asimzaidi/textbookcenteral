<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {
    public $validate = array(
        'user_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'user_password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );
    
    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['user_password'])) {
        $this->data[$this->alias]['user_password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
    }

}
