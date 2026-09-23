<div class="container">

    <div class="row">
        <div class="col-8">
            <h1 class="heading"><span class="mirror-q">Q</span>uestions</h1>
            <?php
            include("./common/db.php");
            if (isset($_GET['c-id'])) {
                //ye wala tarika chat gpt ne btaya
                // $cid = $_GET['c-id'];
                $query = "select * from questions where category_id=$cid";

                //ye wala tarika chat gpt ne btaya
            } elseif (isset($_GET['u-id'])) {
                // $uid = $_GET['u-id'];
                $query = "select * from questions where user_id=$uid";

            }elseif (isset($_GET['latest'])) {
                $query = "select * from questions order by id desc";
                
            } else {
                $query = "select * from questions";
            }

            $result = $conn->query($query);
            foreach ($result as $row) {
                $title = $row['title'];
                $id = $row['id'];
                echo "<div class='question-list'>
        <h4><a href='?q-id=$id' >$title</a></h4>
        </div>";
            }

            ?>
        </div>
        <div class="col-4">
            <?php include('categorylist.php') ?>
        </div>
    </div>
</div>