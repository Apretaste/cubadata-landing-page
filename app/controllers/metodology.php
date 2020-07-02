<?php

class Metodology
{
	public function main()
	{
		// send data to the view
		$this->view->data->title = "Metodología";
		$this->view->setLayout('main');	
	}
}