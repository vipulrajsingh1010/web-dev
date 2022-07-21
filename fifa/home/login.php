<?php
    if ($SERVER["REQUEST_METHOD"]="POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username1 = 'vipul';
        $password1 = '1234';
        if($username1!=$username) {
            echo '<p>
                    <h2 style="text-align:center;
                        color:#000000;
                        padding: 360px;
                        background-image: linear-gradient(to left,#e3bada,#c91413,#902929,#6c2e2e);">
                        Username does not exist
                        <br>
                        <a href="../home/manager_login.html">
                        <button style="  background-color: #41b601;
                        padding: 10px 6px;
                        margin: 8px 0;
                        width: 20%;
                        font-family: choir;
                        border-radius: 14px;">
                        Retry</button>
                        </a>
                    </h2>
                    </p>';
        } else {
            if ($password1==$password) {
                header('Location: manager_page/managerpage.html');
            } else {
                echo '
                    <p>
                    <h2 style="text-align:center;
                        color:#000000;
                        padding: 340px;
                        background-image: linear-gradient(to left,#e3bada,#c91413,#902929,#6c2e2e);">
                        Username and password combination is wrong!
                        <br>
                        <a href="../home/manager_login.html">
                        <button style="  background-color: #41b601;
                        padding: 10px 6px;
                        margin: 8px 0;
                        width: 20%;
                        font-family: choir;
                        border-radius: 14px;">
                        Retry</button>
                        </a>
                    </h2>
                    </p>
                    ';

            }
        }
    }
?>