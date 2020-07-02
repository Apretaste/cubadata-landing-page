<?php

class Surveys 
{
	public function main()
	{
		// send data to the view
		$this->view->data->title = "Encuestas";
		$this->view->setLayout('main');	
	}
}