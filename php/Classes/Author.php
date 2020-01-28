<?php

namespace Tdameron1\ObjectOriented;

require_once(dirname(__DIR__,) . "AUTO LOAD PATH GOES HERE");

use Ramsey\Uuid\Uuid;

/**
 *
 * @author Thomas Dameron <tdameron1@cnm.edu>
 * @version 1.0.0
 **/



class author {

	//properties below
	/**
	 *
	 * @var Uuid $authorId
	 **/
	private $authorId;
	/**
	 * id for the Author; this is the primary key
	 * @var string $authorActivationToken
	 **/
	private $authorActivationToken;
	/**
	 * the URL used to define the avatar of the user.
	 * @var string $authorAvatarUrl
	 **/
	public $authorAvatarUrl;
	/**
	 * the email address of the author
	 * @var string $authorEmail
	 */
	private $authorEmail;
	/**
	 * The password for the author
	 * @var string $authorHash
	 */
	private $authorHash;
	/**
	 * The username of the author
	 * @var string $authorUsername
	 */
	private $authorUsername;



}