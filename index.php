<?php

include '../../mainfile.php';
include 'include/functions.php';
require XOOPS_ROOT_PATH . '/header.php';
$result = $xoopsDB->query('SELECT uname, email, user_icq FROM ' . $xoopsDB->prefix('users') . " where user_icq<>''");
?>
    <table width="100%" class="outer" cellspacing="1">
        <?php
        $css = 'even';
        while (list($uname, $email, $user_icq) = $xoopsDB->fetchRow($result)) {
            if ($css = 'even') {
                $css = 'odd';
            } ?>
            <tr class="<?php echo($css); ?>">
                <td style="padding-left: 20px" width="25%"><?php echo($uname); ?></td>
                <td style="padding-left: 20px" width="25%"><?php echo($email); ?></td>
                <td style="padding-left: 20px" width="25%"><?php echo($user_icq); ?></td>
                <td align="center" width="25%"><a href="http://wwp.mirabilis.com/scripts/Search.dll?to=<?php echo($user_icq); ?>"><img src='http://wwp.icq.com/scripts/online.dll?icq=<?php echo($user_icq); ?>&img=5' border="0"></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
<?php
require XOOPS_ROOT_PATH . '/footer.php';
?>
