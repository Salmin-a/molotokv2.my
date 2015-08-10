<?php

class ReviewForm extends CFormModel {
	public $author;
	public $email;
	public $review;
	public $document_no;
	public $rating;
	public $recommend;	

	public function rules() {
		return array(
			array(
				'author, review',
				'required',
			),
			array(
				'email',
				'email'
			),
			array(
				'rating, recommend',
				'numerical',
				'integerOnly' => true
			),
			array(
				'document_no',
				'length',
				'max' => 128
			),
		);
	}

	public function attributeLabels() {
		return array(
			'author' => 'Имя',
			'review' => 'Отзыв',
			'email' => 'Эл. почта',
			'document_no' => 'Номер договора',
			'rating' => 'Оценка',
		    'recommend' => 'Порекомендую друзьям',
		);
	}

}
