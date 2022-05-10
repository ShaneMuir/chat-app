<?php
    /*
     * The below method is created to show users last active
     * just like facebook messenger does.
     */
    function get_time_ago( $time )
    {
        $time_difference = time() - $time;
        if( $time_difference < 60 ) { return 'Last active: about 1 minute ago'; }

        $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
            30 * 24 * 60 * 60       =>  'month',
            24 * 60 * 60            =>  'day',
            60 * 60                 =>  'hour',
            60                      =>  'minute',
            1                       =>  'second'
        );
        foreach( $condition as $secs => $str )
        {
            $d = $time_difference / $secs;
            if($time_difference > 60) {
                if( $d > 1 )
                {
                    if($d <= 86400) {
                        $t = round( $d );
                        return 'Last active: about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
                    }
                    else
                    {
                        return "Offline now";
                    }
                }
            }
        }
    }

while($row = mysqli_fetch_assoc($query)){
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
    (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
    if(isset($row2['outgoing_msg_id'])){
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
    }else{
        $you = "";
    }
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
    ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";
    $last_active = $row['last_active'];
    ($row['status'] == "Active now") ? $isOnline = '<p>' . $you . $msg . '</p>' : $isOnline = '<p>' . get_time_ago($last_active) . '</p>';


    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. ucfirst($row['fname']). " " . ucfirst($row['lname']) .'</span>' . $isOnline .
                    '</div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
}
?>
