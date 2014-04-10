<?php

	class Tanda extends BaseModel {

		protected $table = 'tandas';

		public function users() {
			return $this->belongsToMany('User');
		}

		protected $fillable = ('title', 'user_num', 'time_period', 'pay_per_user', 'payout');

	}

?>