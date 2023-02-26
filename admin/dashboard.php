<?php
require('top.inc.php');

?>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Categories</h4>
                        <div class="row">
                            <div class="col-lg-6">
                            <?php
                                $sql="SELECT * from property_type";
                                $res=mysqli_query($con,$sql);
                                echo mysqli_num_rows($res);
                            ?>    

                            </div>
                            <div class="col-lg-6"><a href="property_type.php">view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Properties</h4>
                        <div class="row">
                            <div class="col-lg-6">
                            <?php
                                $sql="SELECT * from properties";
                                $res=mysqli_query($con,$sql);
                                echo mysqli_num_rows($res);
                            ?> </div>
                            <div class="col-lg-6"><a href="properties.php">view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Agents</h4>
                        <div class="row">
                            <div class="col-lg-6">
                            <?php
                                $sql="SELECT * from agent";
                                $res=mysqli_query($con,$sql);
                                echo mysqli_num_rows($res);
                            ?> </div>
                            <div class="col-lg-6"><a href="agent.php">view</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Team</h4>
                        <div class="row">
                            <div class="col-lg-6">
                            <?php
                                $sql="SELECT * from client";
                                $res=mysqli_query($con,$sql);
                                echo mysqli_num_rows($res);
                            ?> </div>
                            <div class="col-lg-6"><a href="client.php">view</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('footer.inc.php');
?>