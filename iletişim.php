<?php 
                          
                  $myemail="b181210016";
                  $mysifre="1234";
                  $email = $_POST['email'];
                  $sifre = $_POST['sifre'];
                  $namen=explode("@",$email);
                  if($email==$myemail && $mysifre==$sifre)
                  {
                    echo $namen[0]."  Hoşgeldin" ;
                  }else {
                    echo "Kullanıcı epostası yada şifre hatalı";
                    body("Location:login.html");
                  }?>