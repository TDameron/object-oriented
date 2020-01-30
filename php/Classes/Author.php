<?php

namespace Tdameron1\ObjectOriented;

require_once(dirname(__DIR__, ) . "vendor/autoload.php");

require_once("autoload.php");


use http\Exception\InvalidArgumentException;
use Ramsey\Uuid\Uuid;


/**
 *
 * @author Thomas Dameron <tdameron1@cnm.edu>
 * @version 1.0.0
 **/


class author implements \JsonSerializable {
	use ValidateDate;
	use ValidateUuid;

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
	private $authorAvatarUrl;

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

	public function getAuthorId(): Uuid {
		return ($this->authorId);
	}

	public function getAuthorActivationToken(): ?string {
		return ($this->authorActivationToken);
	}

	public function getAuthorAvatarURL($authorAvatarUrl) {
		$this->authorAvatarUrl;
	}

	public function getAuthorEmail($authorEmail) {
		$this->authorEmail;
	}

	public function getAuthorHash($authorHash) {
		$this->authorHash;
	}

	/**
	 * mutator method for profile hash password
	 *
	 * @param string $newProfileHash
	 * @throws \InvalidArgumentException if the hash is not secure
	 * @throws \RangeException if the hash is not 128 characters
	 * @throws \TypeError if profile hash is not a string
	 */
	public function setAuthorHash(string $newAuthorHash): void {
		//enforce that the hash is properly formatted
		$newAuthorHash = trim($newAuthorHash);
		if(empty($newAuthorHash) === true) {
			throw(new \InvalidArgumentException("profile password hash empty or insecure"));
		}
		//enforce the hash is really an Argon hash
		$authorHashInfo = password_get_info($newAuthorHash);
		if($authorHashInfo["algoName"] !== "argon2i") {
			throw(new \InvalidArgumentException("profile hash is not a valid hash"));
		}
		//enforce that the hash is exactly 97 characters.
		if(strlen($newAuthorHash) !== 97) {
			throw(new \RangeException("profile hash must be 97 characters"));
		}
		//store the hash
		$this->authorHash = $newAuthorHash;
	}

	public function getAuthorUsername($authorUsername) {
		$this->authorUsername;
	}

	/**
	 * @param string $newAuthorId
	 * @throws \InvalidArgumentException if the data types are not InvalidArgumentException
	 * @throws \RangeException if the data values are out of bounds (i.e. too long or negative)
	 * @throws \TypeError if data types violate type hints
	 **/
	public function setAuthorId($newAuthorId): void {
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

	/** EDIT THE BELOW CODE SO THAT IT WILL COMPLY WITH STATE VARIABLES */
	/**
	 * formats the state variables for JSON serialization
	 *
	 * @return array resulting state variables to serialize
	 **/
	public function jsonSerialize(): array {
		$fields = get_object_vars($this);

		$fields["authorId"] = $this->authorId->toString();
		$fields["authorActivationToken"] = $this->authorActivationToken->toString();
	}
}