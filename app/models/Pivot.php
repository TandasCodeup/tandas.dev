<?php

	class Pivot extends BaseModel {

		protected $table = 'tanda_user';

		public function users() {
			$this->belongsTo('User');
			$this->belongsTo('Tanda');
		}

	}

?>