<?php 


	function amra_cmb2_banaitesi(){
		
		$regi = new_cmb2_box(array(
			'title'			=> 'Student Register Number',
			'id'			=> 'sdudent_regi',
			'object_types'	=> array('students'),
		));
		
		
		$regi->add_field(array(
			'name'	=> 'Name',
			'id'	=> '_reginame',
			'type'	=> 'text',
			'default' => 'Regi : ',
		));
		
		$regi->add_field(array(
			'name'	=> 'Register Number',
			'id'	=> '_sturegi',
			'type'	=> 'text',
			'default' => '********',
		));
		
		//--------student enn--
		
		$regi = new_cmb2_box(array(
			'title'			=> 'Member Title',
			'id'			=> 'membertitle',
			'object_types'	=> array('teammember'),
		));
		
		
		$regi->add_field(array(
			'name'	=> 'Title',
			'id'	=> '_membertitle',
			'type'	=> 'text',
			'default' => '',
		));

	}
	add_action('cmb2_admin_init','amra_cmb2_banaitesi');
	
	