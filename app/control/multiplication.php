<!DOCTYPE html>
<html>
    <body>
        <table>
            <tbody>
                <?php for ($i = 1; $i <=12; $i++): ?>
                    <tr>
                        <?php for ($j = 1; $j <= 12; $j++): ?>
                        <td>
                            <?php echo $i * $j; ?>
                        </td>
                
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table>
    </body>
</html>