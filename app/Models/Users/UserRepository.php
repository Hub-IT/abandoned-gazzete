<?php
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 5/28/2015
 * Time: 14:53
 */

namespace app\Models\Users;


use app\Models\User;

interface UserRepository {

	public function getName();
}