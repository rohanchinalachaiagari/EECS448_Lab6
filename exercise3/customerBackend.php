<html>
    <head>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $i1q = $_POST["i1q"];
            $i2q = $_POST["i2q"];
            $i3q = $_POST["i3q"];
            $shipping = $_POST["shipping"];
            $total = $i1q*999+$i2q*799+$i3q*899;
            echo "<h1>Welcome ".$user."!</h1>";
            echo "<p>You logged in with password: ".$pass."</p>";
        ?>
        <table>
            <tr class="header">
                <td></td>
                <td>Quantity</td>
                <td>Cost Per Item</td>
                <td>Subtotal</td>
            </tr>
            <tr>
                <td>iPhone 14 Pro</td>
                <td><?php echo $i1q;?></td>
                <td>$999</td>
                <td>$<?php echo $i1q*999;?></td>
            </tr>
            <tr>
                <td>iPhone 14</td>
                <td><?php echo $i2q;?></td>
                <td>$799</td>
                <td>$<?php echo $i2q*799;?></td>
            </tr>
            <tr>
                <td>iPhone 14 Plus</td>
                <td><?php echo $i3q;?></td>
                <td>$899</td>
                <td>$<?php echo $i3q*899;?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td colspan="2"><?php echo $shipping;?></td>
                <td>
                    <?php
                        if($shipping == "Free 7 day") {
                            echo "$0";
                        } else if ($shipping == "$50.00 over night") {
                            echo "$50";
                            $total += 50;
                        } else if ($shipping == "$50.00 over night") {
                            echo "$5";
                            $total += 5;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">Total Cost</td>
                <td>$<?php echo $total;?></td>
            </tr>
        </table>
    </body>
</html>