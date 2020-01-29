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
	public function getAuthorId($authorId) {}
	/**
	 * id for the Author; this is the primary key
	 * @var string $authorActivationToken
	 **/
	private $authorActivationToken;
	public function getAuthorActivationToken() : ?string {
		return ($this->authorActivationToken);
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

//**CONSTRUCT HERE**//
public function __construct($newAuthorId, $newAuthorActivationToken, $newAuthorAvatarUrl, $newAuthorEmail, $newAuthorHash, $newAuthorUsername) {
		$this->setAuthorId($newAuthorId);
		$this->setAuthorActivationToken($newAuthorActivationToken);
		$this->setAuthorAvatarUrl($newAuthorAvatarUrl);
		$this->authorEmail = setAuthorEmail($newAuthorEmail);
		$this->authorHash = setAuthorHash($newAuthorHash);
		$this->authorUsername = setAuthorUsername($newAuthorUsername);
	}
//**GETTERS AND SETTERS HERE**//

//** PLACE ACCESSOR=GETTER BEFORE EACH MUTATOR, SETTORS ARE THE SAME AS MUTATORS */

/**
 * @param string $newAuthorId
 * @throws \InvalidArgumentException if the data types are not InvalidArgumentException
 * @throws \RangeException if the data values are out of bounds (i.e. too long or negative)
 * @throws \TypeError if data types violate type hints
 **/
	public function setAuthorId($newAuthorId) : void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		// convert and store the author id
		$this->authorId = $uuid;
	}
		/**
		 * @param string|null $newAuthorActivationToken
		 * *@throws \InvalidArgumentException if the token is not a string or is not secure
		 * @throws \RangeException if thge token is not exactly 32 characters
		 * @throws \TypeError if the activation token is not a string
		 */
		public function setAuthorActivationToken(?string $newAuthorActivationToken): void {
			if($newAuthorActivationToken === null) {
				$this->authorActivationToken === null;
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
	}


