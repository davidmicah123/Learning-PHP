<?php
    include ('functions.php');
    
    $json = file_get_contents('data.json');
    $data = json_decode($json, true);
    if (is_array($data)) {
        krsort($data);
    }

    switch ($_GET['mode']) {
        case "remove":
                $id = $_GET['id'];
                $data[$id]['status'] = 2;
                save($data);
            break;
        case "stop":
                $id = $_GET['id'];
                $data[$id]['date_end'] = time();
                save($data);
            break;
        case "new": 
                $time = time();
                $data[$time]['id'] = $time;
                $data[$time]['task_name'] = $_GET['task_name'];
                $data[$time]['date_start'] = $time;
                $data[$time]['date_end'] = '';
                $data[$time]['status'] = 1;
                save($data);
            break;

        case "tally":
                $count = 0;
                if (is_array($data)) {
                    foreach ($data as $task) {
                        if ($task['status'] == 1) {
                            if ($task['date_end'] == "") {
                                $task['date_end'] = time();
                            }
                            $count = $count + ($task['date_end'] - $task['date_start']);
                        }
                    }
                    echo structured_time($count);
                }
            break;
        case 'build':
                if (is_array($data)) {
                    foreach ($data as $task) {
                        if ($task['status'] == 1) {
                            ?>
                            <tr>
                                <td>
                                    <?php  
                                        if(array_key_exists("task_name", $task)) {
                                            echo $task['task_name'];
                                        } 
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if(array_key_exists("date_start", $task)) {
                                            echo structured_date($task['date_start']); 
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if(array_key_exists("date_end", $task) && $task['date_end'] != '') {
                                            echo structured_date($task['date_end']);
                                        } 
    
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if ($task['date_end'] == "") {
                                            echo structured_time(time() - $task['date_start']);
                                        }else{
                                            echo structured_time($task['date_end'] - $task['date_start']);
                                        }
                                    ?>
                                </td>
                                <td  class="btn_col"><button data-id="<?php echo $task['id']?>" class="stop_btn <?php if($task['date_end'] != ''){echo 'desabled'; } ?>" ><?php echo i('stop') ?></button></td>
                                <td class="btn_col"><button data-id="<?php echo $task['id']?>" class="cancle_btn" ><?php echo i('times') ?></button></td>
                            </tr>  
                        <?php    
                        }
                        
                    }
                }
                
            break;
        
    }


   
    
?>