#models/login.php</br>
<?php

class Login{
    public $ten_tai_khoan;
    public $mat_khau;
    public $vai_tro;

    public function __construct()
    {
        $this->ten_tai_khoan=strip_tags(addslashes($_POST['user-name']));
        $this->mat_khau=strip_tags(addslashes($_POST['password']));
        $this->vai_tro=$_POST['users'];

    }
    
    static function checkUser(){
        
        var_dump($_POST);
        if(enoughInfo()){
            $db = DB::getInstance();
           // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $user = new Login();

            if($user->vai_tro = "nguoi_cho_thue"){

            }
            else if($user->vai_tro = "nguoi_thue_phong"){
                
            }

            $query="SELECT * , count(*) as tong from $user->vai_tro where ten_tai_khoan='$user->ten_tai_khoan'";
            echo $query;//////////////////////// loi loi
            
            $req = $db->query($query);
            $info= $req->fetch();
            

            if($info['tong']==1){
                
                    if(password_verify($user->mat_khau,$info['mat_khau'])){
                        //lưu vào session
                        session_start();
                        $_SESSION['username']=$user->ten_tai_khoan;
                        echo "đăng nhập thành công";
                        header('Location: index.php?controller=posts');
                    }
                    else{
                        echo "mat khau ko dung";
                    }
            }
            else{
                echo "ten dang nhap khong dung";
            }
        }
        else{
            echo "vui long nhap du thong tin";
        }
    }
  
}
function enoughInfo(){
        return (isset($_POST['user-name'])&&isset($_POST['password'])&&isset($_POST['users']));
    }
    ?>
###models/login.php</br>