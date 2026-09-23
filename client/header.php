<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./public/logo5.png" /></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="./">Home</a>
                </li>
                <?php if (isset($_SESSION['user']['username'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?ask=true">Ask Question</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']; ?>">My Questions</a>
                    </li>
                <?php  } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?login=true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?signup=true">Signup</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?latest=true">Just Asked</a>
                </li>
            </ul>
        </div>
    </div>
</nav>