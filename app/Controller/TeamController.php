<?php 
	class TeamController extends AppController{

		public $name = 'Team';
		public $helpers= array('Html' , 'Form');
		public $uses=array('Team','Image');
		public $components = array('RequestHandler');

		public function index() {

			if(!empty($this->request->data))
			{
				$tname=$this->request->data['name'];
				$this->getimage($tname);	
				
			}
			
		}

		public function getimage($tname)
		{
			
			$path = "img/TeamPhoto/";
		        $valid_formats = array("jpg", "png", "gif", "bmp","JPG");
			        if(isset($_FILES)){
				            $name = $_FILES['photoimg']['name'];
				            $size = $_FILES['photoimg']['size'];
				        if(strlen($name)){
				                list($txt, $ext) = explode(".", $name);

				                if(in_array($ext,$valid_formats)){
				                	
				                    if($size<(1024*1024)){
				                    	//echo "<pre>";print_r($ext);exit;
				                        $actual_image_name =$ext;
				                        $tmp = $_FILES['photoimg']['tmp_name'];
				                        if(move_uploaded_file($tmp, $path.$actual_image_name)){
				                            $uploadedfile = $path.$actual_image_name;
				                            list($width,$height)=getimagesize($uploadedfile);
				                            //if($width < 100)
				                                $newwidth = 100;
				                           // else
				                                //$newwidth=100;
				                           // if($height < 300)
				                                $newheight = 100;
				                           // else
				                               // $newheight=100;
				                            if($ext=="jpg" || $ext=="jpeg" || $ext=="JPG"){
					                                $src = imagecreatefromjpeg($uploadedfile);
						                            }else if($ext=="png") {
						                                $src = imagecreatefrompng($uploadedfile);
						                            }else {
						                                $src = imagecreatefromgif($uploadedfile);
						                            }
			                            			$tmp1 = @imagecreatetruecolor($newwidth,$newheight)
			                                		or die('Cannot Initialize new GD image stream');
						                            imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
						                            $filename1 = $path.$name;
						                            if($ext=="jpg" || $ext=="jpeg" ||$ext=="JPG"){
						                                imagejpeg($tmp1,$filename1,100);
						                            }else if($ext=="png") {
						                                imagepng($tmp1,$filename1);
						                            }else {
						                                imagegif($tmp1,$filename1);
						                            }
						                            imagedestroy($src);
						                            imagedestroy($tmp1);
						                            unlink($path.$actual_image_name);
						                            /*echo '<script type="text/javascript" src="/theme/TwitterBootstrap/js/jquery.min.js"></script>';
						                            echo "<img src='../".$path.'img'.$actual_image_name."' id='cropbox' class='preview thumbnoimage'>";*/
			                           				/*echo "<script>$('#cropbox').Jcrop({onSelect: updateCoords}); callCropImage(); </script>";*/
												
							                

							                		$substrteamid=substr($tname,0,3);
							                        $lastteamid=$this->Team->find('list');
							                        
							                        foreach ($lastteamid as $key => $value) 
							                        {
							                        	$test[] = intval(substr($value,3,5));
							                        }
							                        
							                        $no= max($test);
							                       							                        

							                        $temid='';
							                        if(empty($lastteamid))
							                        {
							                        	
							                        	$temid=$substrteamid."01";	
							                        	//print_r($temid);
							                        	
							                        }
							                        else
							                        {
							                        	
							                        	$ntemid=$no+01;
							                        	$ntemid="0".$ntemid;
							                        	$temid=$substrteamid.$ntemid;
							                        
							                        	
							                        }


							                        $data['Image']['url']=$filename1;
							                        $data['Image']['teamid']=$temid;
							                        $this->Image->save($data);
							                        //print_r($tname);

							                        
							                        $tnm['Team']['team_name']=$tname;
							                        $tnm['Team']['id']=$temid;
							                        $n=$this->Image->getLastInsertId();
							                        $tnm['Team']['imageid']=$n;
							                        if($this->Team->save($tnm))
							                        {
							                        	$this->redirect(array('controller' => 'Team','action' => 'index'));
							                        	$this->Session->setFlash('Team succesfully added','default');
							                        }

			                        		}
			                        		else
			                            		echo "failed";
			                    		}
			                    		else
			                        		echo "Image file size max 1 MB";
			                		}
			                else
			                    echo "Invalid file format..";
			            }
			            else
			                echo "Please select image..!";
			            exit;
			        }
		}
	}
?>