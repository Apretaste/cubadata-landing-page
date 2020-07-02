<?php 

class Elements 
{
	public function main()
	{
		// send data to the view
		$this->view->data->title = "Elements";
		$this->view->setLayout('main');
	}
}