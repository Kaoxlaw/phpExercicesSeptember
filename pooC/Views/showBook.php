<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Resume</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($list as $book) {
        echo "<tr>";
        echo "<td>" . $book->getId() . "</td>";
        echo "<td>" . $book->getTitle() . "</td>";
        echo "<td>" . $book->getAuthor() . "</td>";
        echo "<td>" . $book->getResume() . "</td>";
        echo "<td> <img src='./Ressources/icons/edit.png' style='width:30px;height:30px;'></td>";
        echo "<td> <img src='./Ressources/icons/delete.png' style='width:30px;height:30px;'></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>