<?php

class Ethics
{
	public function main()
	{
		// send data to the view
		$this->view->data->title = "Ética";
		$this->view->setLayout('main');	
	}
}