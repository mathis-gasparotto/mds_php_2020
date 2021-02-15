<?php
require_once "../data/users.php";
require_once "../layout/header.php";
?>

<link href="../style/users.css" rel="stylesheet" />
</head>

<body>

    <div id="users">
        <?php



        foreach ($users as $user) { ?>

            <div class="user">

                <p class="login">
                    <?php echo $user['login']; ?>
                </p>

                <p class="email">
                    <?php echo $user['email']; ?>
                </p>


                <?php if ($user['account_activated']) { ?>
                    <div class="activated">
                        <div class="cercle_vert"></div>
                        <p class="lblActivated">Compte activé</p>
                    </div>
                <?php } else { ?>
                    <div class="unactivated">
                        <div class="cercle_rouge"></div>
                        <p class="lblUnactivated">Compte non activé</p>
                    </div>
                <?php } ?>
            </div>
        <?php
        }



        /*$i = 0;
        while ($i < count($users)) { ?>
        <div class="user">

            <?php 
            echo $users[$i]['login'] . "<br />"; 
            echo $users[$i]['email'] . "<br />";

            if ($users[$i]['account_activated']) { ?>
                <div class="activated">
                    <div class="cercle_vert"></div>
                    <p>Compte activé</p>
                </div>
            <?php } else { ?>
                <div class="unactivated">
                    <div class="cercle_rouge"></div>
                    <p>Compte non activé</p>
                </div>
            <?php }?> 
        </div>
        <?php 
        $i ++; 
        }*/


        ?>
    </div>

    <?php require_once "../layout/footer.php"; ?>