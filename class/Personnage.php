<?php

class Personnage{
    private $_id;
    private $_name;
    private $_class;
    private $_level;
    private $_sex;
    private $_exp;
    private $_strength;
    private $_life;


    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees){
        foreach($donnees as $key => $value){
            $method = 'set' .ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    /**
     * @return Int
     */
    public function getId(){
        return $this->_id;
    }

    /**
     * @param Int $id
     */
    public function setId(Int $id){
        $this->_id = (int) $id;
    }

    /**
     * @return string
     */
    public function getName():string{
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name):void{
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getClass(){
        return $this->_class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class):void{
        $this->_class = $class;
    }

    /**
     * @return Int
     */
    public function getLevel():int{
        return $this->_level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level){
        $this->_level = $level;
    }

    /**
     * @return mixed
     */
    public function getSex(){
        return $this->_sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex):void{
        $this->_sex = $sex;
    }

    /**
     * @return int
     */
    public function getExperience(){
        return $this->_exp;
    }

    /**
     * @param int $exp
     */
    public function setExperience(int $exp):void{
        $this->_exp = $exp;
    }

    /**
     * @return int
     */
    public function getStrength():int{
        return $this->_strength;
    }

    /**
     * @param int $strenght
     */
    public function setStrength(int $strength){
        $this->_strength = $strength;
    }

    /**
     * @return int
     */
    public function getLife():int{
        return $this->_life;
    }

    /**
     * @param int $life
     */
    public function setLife(int $life):void
    {
        $this->_life = $life;
     }


}