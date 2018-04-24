<?php
use Phalcon\Mvc\Model;
class event extends Model{

	public function getSource(){
    return "events"; // ชื่อ ตาราง ใน ฐานข้อมูล จริงๆ
  }

  
}