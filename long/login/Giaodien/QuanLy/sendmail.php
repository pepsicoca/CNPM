<?php                                  
                                    include '../../connect.php';
									$sql = "SELECT Email FROM khachhang";
									$result = mysqli_query($connect,$sql);
									if(mysqli_num_rows($result)>0)
									{
										while($row =mysqli_fetch_assoc($result))
										{
                                            $user=$row['Email'];
                                            $emai=$user . ",";
                                            
                                 
                                   
                                        }}
                                        $to      = "$emai";
                                        $subject = "Thông báo hoàn thành form lý lịch";
                                        $message = "bạn có muốn kiểm tra lại thông tin đã điền";
                                        $headers  =  "From:bomditimvk02@gmail.com" . "\r\n".
                                        "CC: ayzobro789@gmail.com";
                                    
                                        $success = mail ($to,$subject,$message,$headers);
                                    
                                        if( $success == true )
                                        {
                                            echo "Đã gửi mail thành công...";
                                            echo "<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                                            exit();
                                        }
                                        else
                                        {
                                              echo "Không gửi đi được...";
                                              echo "<a href='javascript: history.go(-1)'>Trở lại</a>"; 
                                            exit();
                                        }
                                    
 
?>


        
    



                                        
											
									
								
											