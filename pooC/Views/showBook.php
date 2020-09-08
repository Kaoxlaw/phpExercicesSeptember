<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Resume</th>
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
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>