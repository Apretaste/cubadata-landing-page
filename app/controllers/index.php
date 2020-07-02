<?php 

class Index 
{
	public function main()
	{
		// send data to the view
		$this->view->data->title = "Inicio";
		$this->view->setTemplate('main');
		$this->view->setLayout('main');
	}
}