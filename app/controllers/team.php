<?php

class Team 
{
	public function main()
	{
		// send data to the view
		$this->view->data->title = "Equipo";
		$this->view->setLayout('main');	
	}
}