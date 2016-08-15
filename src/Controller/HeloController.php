<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController
{
		public function index($a = '',$b = '')
				{
					$this->set('message', 'Hello! this is sample page. ;-)');	
					$str = $this->request->data('text1');
					if ($str != null){
							$this->set('message', 'you typed:' . $str);
					} else {
							$this->set('message','please type...');
					}
				}
			  public function err()
				{
						$this->autoRender = false;
						echo "<html><head></head><body>";
						echo "<h1>Hello!</h1>";
						echo "<p>パラメータがありませんでした。</p>";
						echo "</body></html>";
				}
}

