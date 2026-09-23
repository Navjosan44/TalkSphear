<div>
    <h1 class="heading">Categories</h1>
    <?php
    include('./common/db.php');
    $query = "select * from category";
    $result = $conn->query($query);
    foreach ($result as $row) {
        $id = $row['id'];
        $name = ucfirst($row['name']);
        echo "<div class='question-list'>
        <h4><a href='?c-id=$id' >$name</a></h4>
        </div>";
    }
    ?>
</div>