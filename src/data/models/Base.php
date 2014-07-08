<?php namespace js13kgames\data\models;

	/**
	 * Abstract Base Model
	 *
	 * @package     Js13kgames\Data\Models
	 * @version     0.0.1
	 * @author      Michal Chojnacki <m.chojnacki@muyo.pl>
	 * @copyright   2012-2014 js13kGames Team
	 * @link        http://js13kgames.com
	 */

	class Base extends \Illuminate\Database\Eloquent\Model
	{
		/**
		 * @var array   The attributes that are not mass assignable.
		 */

		protected $guarded = [];
	}