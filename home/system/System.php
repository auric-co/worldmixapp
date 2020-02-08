<?php

/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 9/24/2019
 * Time: 12:07 PM
 */
include_once dirname(__FILE__) . '/Database.php';
class System
{

    public $pdo;
    public $con;
    protected $token;
    protected $email;
    protected $msisdn;
    protected $countryCode;
    protected $country;
    protected $name;
    protected $lastName;
    protected $category;
    protected $mode;
    protected $model;
    protected $type;
    protected $transmission;
    protected $fuel;
    protected $brand;
    protected $desc;
    protected $bedrooms;
    protected $dateStart;
    protected $dob;
    protected $code;
    protected $thumbnail;
    protected $address;
    protected $town;
    protected $gender;
    protected $nationID;
    protected $id;
    protected $serial;
    protected $password;
    protected $confirmPassword;
    protected $price;
    protected $level;
    protected $field;
    protected $qualification;
    protected $deadline;


    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @param mixed $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @param mixed $bedrooms
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
    }


    /**
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @return mixed
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }
    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $deadline
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }

    /**
     * @return mixed
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return mixed
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

    /**
     * @param mixed $qualification
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;
    }
    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @return mixed
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * @param mixed $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @param mixed $transmission
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }


    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $msisdn
     */
    public function setMsisdn($msisdn)
    {
        $this->msisdn = $msisdn;
    }

    /**
     * @return mixed
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }


    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }


    /**
     * @param mixed $nationID
     */
    public function setNationID($nationID)
    {
        $this->nationID = $nationID;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }


    /**
     * @return mixed
     */
    public function getNationID()
    {
        return $this->nationID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * @param mixed $confirmPassword
     */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }


    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


    public function __construct()
    {
        session_start();
        $db = new Database();
        $this->pdo = $db->PDO();
        $this->con = $db->mysqli();

    }

    public function domain(){
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
        } else {
            $uri = 'http://';
        }

        $uri .= $_SERVER['HTTP_HOST'];
        return $uri;
    }

    public function getUserToken(){
        if(!isset($_SESSION)){

            session_start();
        }
        if(isset($_SESSION['serial'])){

            $serial = $_SESSION['serial'];

            $query = "SELECT * FROM `lgt_sess` WHERE  `sess_srl` = :serial;";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute(array(':serial' =>$serial));

            $row = $stmt-> fetch(PDO::FETCH_ASSOC);

            if($row['id'] > 0){
                return $row['sess_tkn'];
            }else{
                return null;
            }

        }else{
            return null;
        }
    }

    public function checkLoginState(){

        if(!isset($_SESSION)){

            session_start();
        }
        if(isset($_SESSION['serial'])){

            $serial = $_SESSION['serial'];

            $query = "SELECT * FROM `lgt_sess` WHERE  `sess_srl` = :serial;";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute(array(':serial' =>$serial));

            $row = $stmt-> fetch(PDO::FETCH_ASSOC);

            if($row['id'] > 0){
                //check token for expiry here
                return true;
            }else{
                $this->deleteCookie();
                return false;
            }

        }else{
            $this->deleteCookie();
            return false;
        }

    }

    public  function createRecord($admin_name, $token){
        $serial = $this->createString(30);

        $this->createSession($admin_name,  $serial);

        $this->pdo->prepare('DELETE FROM lgt_sess WHERE sess_us_id = :sessions_userid;') ->execute(array(':sessions_userid' =>$admin_name));

        $query ="INSERT INTO `lgt_sess`(`id`,`sess_us_id`, `sess_tkn`, `sess_srl`, `sess_dt`) VALUES ('',:admin_id,:token,:serial,now())";
        $stmt = $this->pdo->prepare($query);

        if($stmt->execute(array(':admin_id' =>$admin_name, ':token' => $token, ':serial' => $serial))){

            return true;

        }else{
            return false;
        }

    }

    public function createSession($admin_name, $serial){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['username'] = $admin_name;
        $_SESSION['serial'] = $serial;

    }

    public function createCookie($admin_name, $serial){
        setcookie('username', $admin_name, time() + (86400) * 30, "/");
        setcookie('serial', $serial, time() + (86400) * 30, "/");
    }

    public function deleteCookie(){
        session_unset();
        setcookie('username', '', time() -1, "/");
        setcookie('serial', '', time() -1, "/");
    }

    public function deleteListing(){
        $curl = curl_init();
        $req = json_encode(array('token' => $this->getToken()));
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/remove/".$this->getType()."/".$this->getId(),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_POSTFIELDS => $req,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return array('delete' => array());
        }else{
            if ($data['success']){
                return array('remove' => "Successful");
            }else{
                return array('delete' => 'Failed');
            }

        }
    }

    public function createString($len){
        $string = "1qay2wsx3edc4rfv5tgb6zhn7ujm8ik9ollpAQWSXEDCVFRTGBNHYZUJMKILOP";

        return substr(str_shuffle($string), 0, $len);
    }

    public function login(){

        $request = json_encode(array('msisdn' => $this->getMsisdn(), 'password' => $this->getPassword()));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Login error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/register.php', '_self')</script>";
        } else {
            if($data['success'] == true){
                $tkn = $data['token'];
                if($this->createRecord($this->getMsisdn(), $tkn)){
                    header('location:'.$this->domain()."/home");
                    exit();
                }else{
                    echo "<script>alert('Login error: Session could not be initialised')</script>";
                    echo "<script>window.open('".$this->domain()."/register.php', '_self')</script>";
                }

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/register.php', '_self')</script>";
            }
        }
        curl_close($curl);

    }

    public function register(){

        $request = json_encode(
            array(
                'name'=> $this->getName(),
                'surname' => $this->getLastName(),
                'msisdn' => $this->getMsisdn(),
                'password' => $this->getPassword(),
                'confirmPassword' => $this->getConfirmPassword(),
                'city' => $this->getTown(),
                'country' => $this->getCountry()
            )
        );

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/register",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);

        if ($err) {

            echo "<script>alert('Account creation error : ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/register.php?success=false?message=connection to backend failed', '_self')</script>";

        } else {
            if($data['success'] == true){

                echo "<script>alert('".$data['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/activate.php?success=true?message=account created', '_self')</script>";

            }else{

                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/register.php?success=false?message=account creation failed', '_self')</script>";

            }
        }
        curl_close($curl);

    }

    public function activate(){

        $request = json_encode(array('msisdn' => $this->getMsisdn(), 'code' => $this->getCode()));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/activate/account",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Activation error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/activate.php', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Account Successfully Activated. Please login')</script>";
                echo "<script>window.open('".$this->domain()."/register.php', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/activate.php?success=false', '_self')</script>";
            }
        }
        curl_close($curl);
    }

    public function getSubcat1($cat){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/categories/sub/higher/".$cat,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return null;
        }else{
            return $data['categories'];
        }



    }

    public function getSubcat2($cat){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/categories/sub/medium/".$cat,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return null;
        }else{
            return $data['categories'];
        }



    }

    public function getSubcat3($cat){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/categories/sub/lower/".$cat,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return null;
        }else{
            return $data['categories'];
        }



    }

    public function getJobsLevel(){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/categories/jobs/levels",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return null;
        }else{
            return $data['levels'];
        }

    }

    public function getJobsQualifications(){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/categories/jobs/qualifications",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return null;
        }else{
            return $data['qualifications'];
        }

    }

    public function getCountries(){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/countries",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return null;
        }else{
            return $data['countries'];
        }

    }

    public function getCountryStates($country){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/country/states/".$country,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return array('states' => array());
        }else{
            return $data['states'];
        }

    }

    public function getStateCity($state){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/country/state/cities/".$state,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return array('states' => array());
        }else{
            return $data['city'];
        }

    }

    public function getVehicleBrands($mode, $type, $subtype){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/system/vehicle/brands/".$mode."/".$type."/".$subtype,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return null;
        }else{
            return $data['brands'];
        }
    }

    public function requestService(){
        $request = json_encode(array(
           'token' => $this->getToken(),
            'name' => $this->getName(),
            'service_id' => $this->getCategory()
        ));

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/subscribe/requests/1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS =>$request,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Request error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/find/services?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Service Request logged')</script>";
                echo "<script>window.open('".$this->domain()."/home/?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/find/services/?success=false', '_self')</script>";
            }
        }
        curl_close($curl);
    }

    public function requestJob(){

        $request = json_encode(array(
            'token' => $this->getToken(),
            'category' => $this->getCategory(),
            'field' => $this->getField(),
            'level' => $this->getLevel(),
            'deadline' => $this->getDeadline(),
            'town' => $this->getTown(),
            'country' => $this->getCountry()
        ));


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/subscribe/requests/3",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS =>$request,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Request error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/find/jobs?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Job Request logged')</script>";
                echo "<script>window.open('".$this->domain()."/home/?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/find/jobs/?success=false', '_self')</script>";
            }
        }
        curl_close($curl);


    }

    public function requestVehicle(){

        $request = array(
            'token' => $this->getToken(),
            'name' => $this->getName(),
            'mode' => $this->getMode(),
            'type' => $this->getType(),
            'model' => $this->getModel(),
            'brand' => $this->getBrand(),
            'fuel' => $this->getFuel(),
            'transmission' => $this->getTransmission(),
            'town' => $this->getTown(),
            'price' => $this->getPrice()
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/subscribe/requests/4",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS =>$request,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Request error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/find/vehicle?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Vehicle Request logged')</script>";
                echo "<script>window.open('".$this->domain()."/home?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/find/vehicle/?success=false', '_self')</script>";
            }
        }
        curl_close($curl);
    }

    public function requestAccommo(){
        
        $pr = explode('-', $this->getPrice());
        
        
        $request = json_encode(array(
            'token' => $this->getToken(),
            'subcategory1'=> $this->getCategory(),
            'bedrooms' => $this->getBedrooms(),
            'startDate' => $this->getDateStart(),
            'price' => $pr[0],
            'name' => $this->getName(),
            'priceRange' => $pr[1],
            'town' => $this->getTown(),
            'country' => $this->getCountry(),
        ));
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/subscribe/requests/2",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS =>$request,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Request error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/find/property?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Accommodation Request logged')</script>";
                echo "<script>window.open('".$this->domain()."/home/?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/find/property/?success=false', '_self')</script>";
            }
        }
        curl_close($curl);
    }
    
    public function postService(){

        $request = json_encode(array('token' => $this->getToken(), 'service' => $this->getCategory(), 'details' => $this->getDesc(), 'name' => $this->getName()));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/save/listings/1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Post error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/post?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Service listing Posted')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=false', '_self')</script>";
            }
        }
        curl_close($curl);

    }

    public function postJob(){

        $request = json_encode(array(
            'title' => $this->getName(),
            'category' => $this->getCategory(),
            'field' => $this->getField(),
            'level' => $this->getLevel(),
            'notes' => $this->getDesc(),
            'deadline' => $this->getDeadline(),
            'town' => $this->getTown(),
            'country' => $this->getCountry()
        ));

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/save/listings/3",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS =>$request,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Post error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/post?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Job listing Posted')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=false', '_self')</script>";
            }
        }
        curl_close($curl);
    }

    public function postVehicle(){

        $request = array(
            'token' => $this->getToken(),
            'name' => $this->getName(),
            'mode' => $this->getMode(),
            'type' => $this->getType(),
            'model' => $this->getModel(),
            'brand' => $this->getBrand(),
            'fuel' => $this->getFuel(),
            'transmission' => $this->getTransmission(),
            'notes' => $this->getDesc(),
            'town' => $this->getTown(),
            'price' => $this->getPrice()
        );


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/save/listings/4",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS =>$request,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Post error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/post?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Vehicle listing Posted')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=false', '_self')</script>";
            }
        }
        curl_close($curl);

    }

    public function postAccommo(){
        $request = json_encode(array(
            'token' => $this->getToken(),
            'name' => $this->getName(),
            'subcategory1'=> $this->getCategory(),
            'bedrooms' => $this->getBedrooms(),
            'startDate' => $this->getDateStart(),
            'price' => $this->getPrice(),
            'notes' => $this->getDesc(),
            'thumbnail' => $this->getThumbnail(),
            'town' => $this->getTown(),
            'country' => $this->getCountry()
        ));

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/save/listings/2",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS =>$request,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        if ($err) {
            echo "<script>alert('Post error: ".$err."')</script>";
            echo "<script>window.open('".$this->domain()."/home/post?error=fatal&message=connection-failed', '_self')</script>";
        } else {
            if($data['success'] == true){
                echo "<script>alert('Property listing Posted')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=true', '_self')</script>";

            }else{
                echo "<script>alert('".$data['error']['type']." : ".$data['error']['message']."')</script>";
                echo "<script>window.open('".$this->domain()."/home/post?success=false', '_self')</script>";
            }
        }
        curl_close($curl);


    }

    public function matchCount(){

        $curl = curl_init();
        $req = json_encode(array('token' => $this->getToken()));
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/my/match/count",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $req,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return array('count' => array());
        }else{
            return $data;
        }
    }

    public function myMatches(){
        $curl = curl_init();
        $req = json_encode(array('token' => $this->getToken()));
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/my/matches",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $req,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return array('matches' => array());
        }else{
            return $data['matches'];
        }
    }

    public function matchDetails(){
        $id = $this->getId();
        $curl = curl_init();
        $req = json_encode(array('token' => $this->getToken()));
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://app.worldmixapp.com/api/user/my/matches/details/".$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $req,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        if ($err){
            return array('details' => array());
        }else{
            
            return array('details' => $data['details']) ;
        }
    }
}