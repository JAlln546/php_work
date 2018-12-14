<!DOCTYPE html>
<html>
    <HEAD>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <style type="text/css">
            body {
                font-family: 'Raleway', sans-serif;
            }
            table {
                margin:10px auto 40px auto;
            }
            
            td, th {
                width:25px;
                width:25px;
                padding:1%;
                border: 1px solid dodgerblue;
                text-align: center;
            }
            th {
                background:#C2DFFF;
            }
            h1 {
                color:dodgerblue;
                text-align:center;
            }
        </style>
    </HEAD>
    <body>
        <h1>Multiplying Cells</h1>
        <table>
            <tbody>
            <?php for ($i = 0; $i <= 12; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j <= 12; $j++): ?>
                        <?php if ($i * $j == 0): ?>
                            <th>
                                <?php if ($i == 0 && $j == 0): ?>
                                <?php elseif ($i == 0): ?>
                                    <?php echo $j; ?>
                                <?php elseif ($j == 0): ?>
                                    <?php echo $i; ?>
                                <?php endif ?>
                            </th>
                        <?php else: ?>
                            <td>
                                <?php echo $i * $j; ?>
                            </td>
                        <?php endif ?>
                        
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </tbody>
        </table>
    </body>
</html>