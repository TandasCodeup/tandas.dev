<?php

	class Payment extends BaseModel{

		protected $table = 'payment';

		public function tandas() {
			$this->belongsTo('Tanda');
			$this->belongsTo('User');
		}

	}

?>