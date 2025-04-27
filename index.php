
<?php  include("head.html") ?>

    <?php session_start() ?>
    <!-- Products Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">محصولات ما</h2>
        <div class="row">
            
            <?php
                $link=mysqli_connect("localhost","root","","logindb");
                $result=mysqli_query($link,"SELECT * FROM `data`");
                mysqli_close($link);
                $row=mysqli_fetch_array($result);

                while($row){
                ?>


                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo($row['imageURL'])?>" class="card-img-top" alt="مکمل 1">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($row['title'])?></h5>
                                <p class="card-text"><?php echo($row['text'])?></p>
                                <p class="card-text"><strong><?php echo($row['text2'])?></strong></p>
                                <a href="#" class="btn btn-primary">افزودن به سبد خرید</a>
                            </div>
                        </div>
                        
                    </div>
                
                <?php
                $row=mysqli_fetch_array($result);
                }
            ?>
        </div>
    </div>

    <?php  include("foot.html") ?>
