<?php

/******************************************************************
 * 
 * Projectname:   Avatar Builder  
 * Version:       1.0
 * Author:        POOYA SABRAMOOZ <pooya_alen1990@yahoo.com>
 * Last modified: 25 10 2014
 * Copyright (C): 2014 All Rights Reserved
 * 
 * GNU General Public License (Version 2, June 1991)
 *
 * This program is free software; you can redistribute
 * it and/or modify it under the terms of the GNU
 * General Public License as published by the Free
 * Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU General Public License
 * for more details.
 * 
 ******************************************************************/
 
 
class Avatar{
	
	public $gender;
	public $hair;
	public $nose;
	public $lips;
	public $eyes;
	
	### this property considered for seperator character in picture names 
	public $seperator = '-';
	
	### this property considered for Location of images
	public $imageLoc = 'images/';
	
	### this is a defualt style for avatars ;) you could change it ;)
	public $style = 'style="left:23px;top:36px;position:absolute;"';
	
	public $output;
	
	public function __construct($gender){
		$this->gender = $gender;
		return $this->gender;
		}
		
	public function setHair($type = '1' , $color = 'defualt'){
		$this->hair = $type.$this->seperator.$color;
		}
		
	public function setNose($type = '1' , $color = 'defualt'){
		$this->nose = $type.$this->seperator.$color;
		}
		
	public function setLips($type = '1' , $color = 'defualt'){
		$this->lips = $type.$this->seperator.$color;
		}
		
	public function setEyes($type = '1' , $color = 'defualt'){
		$this->eyes = $type.$this->seperator.$color;
		}
		
	public function draw(){
		
			$this->output  = '<div style="position:relative;width:145px;height:170px;border:solid 1px black;padding:3px;float:left;margin:5px;">';	
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->seperator.'base.png" '.$this->style.'>';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->seperator.'hair'.$this->seperator.$this->hair.'.png" style="position:absolute;">';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->seperator.'eyes'.$this->seperator.$this->eyes.'.png" '.$this->style.'>';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->seperator.'nose'.$this->seperator.$this->nose.'.png" '.$this->style.'>';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->seperator.'lips'.$this->seperator.$this->lips.'.png" '.$this->style.'>';
			$this->output .= '</div>';
			
		return $this->output;
		
		}
		
	}