<?php
App::uses('AppModel', 'Model');

class Vote extends AppModel {
    public $belongsTo = array( 'User', 'VoteType', 'Status' );
    public $hasMany = array( 'Entry' );
    public $validate = array(
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
            ),
            'maxlength' => array(
                'rule' => array('maxlength', 60),
                //'message' => 'Your custom message here',
            ),
        ),
        'description' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
            ),
            'maxlength' => array(
                'rule' => array('maxlength'),
                //'message' => 'Your custom message here',
            ),
        ),
        'start_date' => array(
            'rule' => array('date'),
            //'message' => 'Your custom message here',
            'allowEmpty' => false,
            'required' => true,
        ),
        'end_date' => array(
            'rule' => array('date'),
            //'message' => 'Your custom message here',
            'allowEmpty' => false,
            'required' => true,
        ),
        'vote_count' => array(
            'rule' => array('numeric'),
            //'message' => 'Your custom message here',
        ),
        'access_count' => array(
            'rule' => array('numeric'),
            //'message' => 'Your custom message here',
        ),
    );


}
