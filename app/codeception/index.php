<!DOCTYPE html>
<html>
    <body>
        <H1>Welcome to my site!</H1>
        
        <?php if(!empty($_GET['search'])): ?>
            <strong>
                You searched for: <?php echo $_GET['search']; ?>
            </strong>
            
        <?php endif ?>
        
    </body>
</html>