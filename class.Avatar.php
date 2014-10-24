<?php

class Avatar{
	
	public $gender;
	public $hair;
	public $nose;
	public $lips;
	public $eyes;
	public $separation = '-';
	public $imageLoc = 'images/';
	public $output;
	public $style = 'style="left:23px;top:36px;position:absolute;"';
	
	public function __construct($gender){
		$this->gender = $gender;
		return $this->gender;
		}
		
	public function setHair($type = '1' , $color = 'defualt'){
		$this->hair = $type.$this->separation.$color;
		}
	public function setNose($type = '1' , $color = 'defualt'){
		$this->nose = $type.$this->separation.$color;
		}
	public function setLips($type = '1' , $color = 'defualt'){
		$this->lips = $type.$this->separation.$color;
		}
	public function setEyes($type = '1' , $color = 'defualt'){
		$this->eyes = $type.$this->separation.$color;
		}
	public function draw(){
		
			$this->output  = '<div style="position:relative;width:145px;height:170px;border:solid 1px red;padding:3px;">';	
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->separation.'base.png" '.$this->style.'>';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->separation.'hair'.$this->separation.$this->hair.'.png" style="position:absolute;">';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->separation.'eyes'.$this->separation.$this->eyes.'.png" '.$this->style.'>';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->separation.'nose'.$this->separation.$this->nose.'.png" '.$this->style.'>';
			$this->output .= '<img src="'.$this->imageLoc.$this->gender.$this->separation.'lips'.$this->separation.$this->lips.'.png" '.$this->style.'>';
			$this->output .= '</div>';
			
		return $this->output;
		}
		
	}