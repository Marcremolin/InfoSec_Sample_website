<?php
    $num = mysqli_num_rows($resultPosts);
    if ($num>0) {
        while ($fetch=mysqli_fetch_assoc($resultPosts)) {
            echo "
            <tr>
                <td class='text-center align-middle mx-auto font-weight-bold'>".$fetch['title']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['content']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['publish_date']."</td>
                <td class='text-center align-middle mx-auto'>".$fetch['publisher']."</td>
                <td>
                    <div class='dropdown'>
                        <button class='btn btn-primary dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                            Action
                        </button>
                        <ul class='dropdown-menu flex-column justify-content-center'>
                            <li><a class='dropdown-item text-center' href='#'>Edit</a></li>
                            <li>                
                            <form method='post' action='delete.php'>
                            <input type='hidden' name='id' value=" .$fetch['id']. ">
                            <a class='dropdown-item text-center' type='submit' name='delete'>Delete</a>
                            </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            ";
        }
    }
    $resultPosts->data_seek(0);
?>