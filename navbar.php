<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">活動報名系統</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" href="index.php">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'status.php' ? 'active' : ''; ?>" href="status.php">迎新茶會</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'conference.php' ? 'active' : ''; ?>" href="conference.php">資管一日營</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
