<?php

require_once 'connection.php';

$connection = new Connection();

$users = $connection->query("SELECT * FROM users");

echo "<table border='1'>

    <tr>
        <th>ID</th>    
        <th>Nome</th>    
        <th>Email</th>
        <th>Ação</th>    
    </tr>
";

foreach($users as $user) {

    echo sprintf("<tr>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>
                           <a href='./views/update.php?id=$user->id'>Editar</a>
                           <a href='./controller/delete.php?id=$user->id'>Excluir</a>
                      </td>
                   </tr>",
        $user->id, $user->name, $user->email);

}
?>

</table>

<input value = 'Adicionar' type = "button" onclick = 'adicionar()'> </button>

<script>
    function adicionar() {
        window.location.href = 'http://localhost:7070/views/add.php'
    }
</script>