<?php
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atom Tracker</title>
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/scss/_icons.scss">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="conrtainer">
        <div class="ristore_mode_txt">
            <p style="margin-left: 2.6vw;">Enter restore Mode</p>
            <p>Total time: <span id="tally"></span></p>
        </div>

        <form id="search_section">
            <input type="text" id="task_name" name="task_name" class="user_input" placeholder="Enter new task name">
            <button class="add_task_btn" type="submit"><?php echo i('play')?></i></button>
        </form>
        <table class="table">
           <thead>
                <tr>
                    <th>Task</th>
                    <th>Sart</th>
                    <th>End</th>
                    <th>Time</th>
                    <th colspan="2">Controls</th>
                </tr>
           </thead>
           <tbody id="log"></tbody>
        </table>        
    </div>

    <!-- JQUERY -->
    <script src="./jquery.min.js"></script>
    <!-- APP SCRIPT -->
    <script src="./atom.tracker.js"></script>
</body>
</html>
