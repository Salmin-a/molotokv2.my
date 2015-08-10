<?php

class ReviewFormController extends Controller {
	public function actionPost() {
		$model = new Review;
		if (isset($_POST['ReviewForm']) && isset($_POST['blackout']) && $_POST['blackout'] == 'j8wkw_293') {
			$model -> attributes = $_POST['ReviewForm'];
			$model -> date = date('Y-m-d');
			$model -> slug = uniqid();
			if ($model -> validate()) {
				if ($model -> save()) {
					echo CJSON::encode(array('status' => true));
				} else {
					echo CJSON::encode(array('status' => false));
				}
			} else {
				echo CJSON::encode(array('status' => false));
			}
		}
	}

}
