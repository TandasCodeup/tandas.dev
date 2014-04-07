<?php

	class Tanda extends BaseModel {

		protected $table = 'tandas';

		public function users() {
			return $this->belongsToMany('User');
		}

	}

?>