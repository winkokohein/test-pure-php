
<?php require("partials/header.php"); ?>
     
     <h1>All Users</h1>
     <table border="1">
        <tr>
            <th>Name</th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->name ;?></td>
            </tr>    
        <?php endforeach; ?>
    </table><br>
    <form action="users/store" method="POST">
        <input type="text" name="name" value="">
        <button type="submit">Add user</button>
    </form>

<?php require("partials/footer.php"); ?>
