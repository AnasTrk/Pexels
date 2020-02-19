<?php 
    include "../includes/Loader.inc.php";
    class Posts extends dbh{
        protected function GetAllPosts($id=0){
            // $test="SELECT * FROM etudiant";
            // $testq= $this->connect()->query($test);
            // $total_rows=$testq->num_rows;

            if($id==0)
            {
                $sql="SELECT * FROM posts";
            }else
            {
                if($id=!0)
                $sql="SELECT * FROM etudiant WHERE ID=".$id;
            }
            $Result=$this->connect()->query($sql);
            $Length=$Result->num_rows;
            if($Length>0)
            {
                while($ligne=$Result->fetch_assoc())
                {
                    $data[]= $ligne;
                }
                return $data;
            }
        }
    }
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i&display=swap" rel="stylesheet">
<link rel="stylesheet" href="asset/Posts.css">

<div class="container">
<?php 
         function ShowAllPosts()
        {
            $datas = $this-> GetAllPosts($id);
            if(!empty($datas))
            {
                 foreach ($datas as $dt)
                 {
                    echo "<div class='box'>
                    <img src=".$dt['image']." alt=''>
                    <h3>tirrrrrrrrrrrrrlsdfqs</h3>
                </div>";
                }
            }else
            {
                echo "Therse No Posts";
            }
        }
?>
    
    <div class="box">
        <img src="asset/images/ND.png" alt="">
        <h3>qsdfqsdfqsfqsd</h3>
    </div>
    <div class="box">
        <img src="asset/images/ND.png" alt="">
        <h3>qdfqsdfqsfq</h3>
    </div>
    <div class="box">
        <img src="asset/images/ND.png" alt="">
        <h3>qdfqsdfqsfq</h3>
    </div>
    <div class="box">
        <img src="asset/images/7.png" alt="">
        <h3>tirrrrrrrrrrrrrlsdfqs</h3>
    </div>
    <div class="box">
        <img src="asset/images/ND.png" alt="">
        <h3>qsdfqsdfqsfqsd</h3>
    </div>
    <div class="box">
        <img src="asset/images/ND.png" alt="">
        <h3>qdfqsdfqsfq</h3>
    </div>
    <div class="box">
        <img src="asset/images/ND.png" alt="">
        <h3>qdfqsdfqsfq</h3>
    </div>  
</div>