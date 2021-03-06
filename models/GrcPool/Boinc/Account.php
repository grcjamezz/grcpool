<?php
abstract class GrcPool_Boinc_Account_MODEL {

	public function __construct() { }

	private $_id = 0;
	private $_name = '';
	private $_url = '';
	private $_signature = '';
	private $_weakKey = '';
	private $_strongKey = '';
	private $_whiteList = 0;
	private $_rac = 0;
	private $_baseUrl = '';
	private $_teamId = 0;
	private $_attachable = 0;
	private $_message = '';
	private $_grcname = '';
	private $_lastSeen = 0;
	private $_secure = 0;
	private $_whiteListCount = 0;
	public function setId(int $int) {$this->_id=$int;}
	public function getId():int {return $this->_id;}
	public function setName(string $string) {$this->_name=$string;}
	public function getName():string {return $this->_name;}
	public function setUrl(string $string) {$this->_url=$string;}
	public function getUrl():string {return $this->_url;}
	public function setSignature(string $string) {$this->_signature=$string;}
	public function getSignature():string {return $this->_signature;}
	public function setWeakKey(string $string) {$this->_weakKey=$string;}
	public function getWeakKey():string {return $this->_weakKey;}
	public function setStrongKey(string $string) {$this->_strongKey=$string;}
	public function getStrongKey():string {return $this->_strongKey;}
	public function setWhiteList(int $int) {$this->_whiteList=$int;}
	public function getWhiteList():int {return $this->_whiteList;}
	public function setRac(float $float) {$this->_rac=$float;}
	public function getRac():float {return $this->_rac;}
	public function setBaseUrl(string $string) {$this->_baseUrl=$string;}
	public function getBaseUrl():string {return $this->_baseUrl;}
	public function setTeamId(int $int) {$this->_teamId=$int;}
	public function getTeamId():int {return $this->_teamId;}
	public function setAttachable(int $int) {$this->_attachable=$int;}
	public function getAttachable():int {return $this->_attachable;}
	public function setMessage(string $string) {$this->_message=$string;}
	public function getMessage():string {return $this->_message;}
	public function setGrcname(string $string) {$this->_grcname=$string;}
	public function getGrcname():string {return $this->_grcname;}
	public function setLastSeen(int $int) {$this->_lastSeen=$int;}
	public function getLastSeen():int {return $this->_lastSeen;}
	public function setSecure(int $int) {$this->_secure=$int;}
	public function getSecure():int {return $this->_secure;}
	public function setWhiteListCount(int $int) {$this->_whiteListCount=$int;}
	public function getWhiteListCount():int {return $this->_whiteListCount;}
}

abstract class GrcPool_Boinc_Account_MODELDAO extends TableDAO {
	protected $_database = 'grcpool';
	protected $_table = 'boinc_account';
	protected $_model = 'GrcPool_Boinc_Account_OBJ';
	protected $_primaryKey = 'id';
	protected $_fields = array(
		'id' => array('type'=>'INT','dbType'=>'int(3)'),
		'name' => array('type'=>'STRING','dbType'=>'varchar(50)'),
		'url' => array('type'=>'STRING','dbType'=>'varchar(100)'),
		'signature' => array('type'=>'STRING','dbType'=>'varchar(500)'),
		'weakKey' => array('type'=>'STRING','dbType'=>'varchar(50)'),
		'strongKey' => array('type'=>'STRING','dbType'=>'varchar(50)'),
		'whiteList' => array('type'=>'INT','dbType'=>'int(1)'),
		'rac' => array('type'=>'FLOAT','dbType'=>'decimal(22,8)'),
		'baseUrl' => array('type'=>'STRING','dbType'=>'varchar(100)'),
		'teamId' => array('type'=>'INT','dbType'=>'int(8)'),
		'attachable' => array('type'=>'INT','dbType'=>'tinyint(1)'),
		'message' => array('type'=>'STRING','dbType'=>'varchar(500)'),
		'grcname' => array('type'=>'STRING','dbType'=>'varchar(50)'),
		'lastSeen' => array('type'=>'INT','dbType'=>'int(11)'),
		'secure' => array('type'=>'INT','dbType'=>'tinyint(1)'),
		'whiteListCount' => array('type'=>'INT','dbType'=>'smallint(3)'),
	);
}