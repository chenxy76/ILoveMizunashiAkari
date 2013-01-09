<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Publication $Publication
 */
class Tag extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Publication' => array(
			'className' => 'Publication',
			'joinTable' => 'publications_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'publication_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
