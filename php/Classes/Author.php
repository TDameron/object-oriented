<?php

namespace Tdameron1\ObjectOriented;

require_once(dirname(__DIR__,) . "AUTO LOAD PATH GOES HERE");

use http\Exception\InvalidArgumentException;
use Ramsey\Uuid\Uuid;

/**
 *
 * @author Thomas Dameron <tdameron1@cnm.edu>
 * @version 1.0.0
 **/


//**CLASS HERE**//
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
	public function getAuthorActivationToken($authorActivationToken) {
		$this->authorActivationToken = $authorActivationToken;
	}
	/**
	 * the URL used to define the avatar of the user.
	 * @var string $authorAvatarUrl
	 **/
	private $authorAvatarUrl;
	public function getAuthorAvatarURL($authorAvatarUrl) {
		$this->authorAvatarUrl;
	}
	/**
	 * the email address of the author
	 * @var string $authorEmail
	 */
	private $authorEmail;
	public function getAuthorEmail($authorEmail) {
		$this->authorEmail;
	}
	/**
	 * The password for the author
	 * @var string $authorHash
	 */
	private $authorHash;
	public function getAuthorHash($authorHash){
		$this->authorHash;
	}
	/**
	 * The username of the author
	 * @var string $authorUsername
	 */
	private $authorUsername;
	public function getAuthorUsername($authorUsername){
		$this->authorUsername;
		}
	}

//**CONSTRUCT HERE**//
	function __construct($authorId, $authorActivationToken, $authorAvatarUrl, $authorEmail, $authorHash, $authorUsername) {
		$this->authorId = $authorId;
		$this->authorActivationToken = $authorActivationToken;
		$this->authorAvatarUrl = $authorAvatarUrl;
		$this->authorEmail = $authorEmail;
		$this->authorHash = $authorHash;
		$this->authorUsername = $authorUsername;
	}
//**GETTERS AND SETTERS HERE**//

/**
 * @param string $newAuthorId
 * @throws \InvalidArgumentException if the data types are not InvalidArgumentException
 * @throws \RangeException if the data values are out of bounds (i.e. too long or negative)
 * @throws \TypeError if data types violate type hints
 */
public function setAuthorId($newAuthorId) : void {
	try {
		$uuid = self::validateUuid($newAuthorId);
	} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw(new $exceptionType($exception->getMessage(), 0, $exception));
	}

	// convert and store the author id
	$this->authorId = $uuid;

public function setAuthorActivationToken(?string $newAuthorActivationToken): void {
	if($newAuthorActivationToken ===null) {
		$this->authorActivationToken === null; {
		return;
	}
	$newAuthorActivationToken = strtolower(trim($newAuthorActivationToken));
	if(ctype_xdigit($newAuthorActivationToken) === false) {
		throw(new\RangeException("user activation is not valid"));
	}
	//make sure user activation token is only 32 characters
	if(strlen($newAuthorActivationToken) !== 32) {
		throw(new\RangeException("user activation token has to be 32"));
	}
	$this->authorActivationToken = $newAuthorActivationToken;
}


