      <?php
      include_once '../function.php/connectiondb.php';
      require_once '../function.php/class.php';

      if (isset($_POST['addArticle'])) addArticle();
      if (isset($_GET['id'])) deleteArticle();
      if (isset($_POST['update'])) updateArticle();




      function displayArticles()
      {


        $data = Article::displayArticle();

        foreach ($data as $row) {
      ?>
          <tr>
            <th scope="row "><button class="btn"> <?= $row['id']; ?></button> </th>
            <td><?= $row['title']; ?></td>

            <td><?= $row['text']; ?></td>
            <td> 
            

          
              <button type="button" class="btn btn-success m-1" name="submitDisplayData" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="displayData('<?= $row['id'] ?>','<?=  $row['title'] ?>','<?= $row['text'] ?>')"  data-bs-toggle="modal" data-bs-target="#exampleModal1">
                Update

              </button>
              <button type="button" name="delete" class="btn btn-danger m-1" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" ><a href='../script/script.php?id=<?= $row['id']; ?>'>Delete</a>

              </button>
            </td>
          </tr>

        <?php }
      }

      function addArticle()
      {
        

        for ($i = 0; $i < count($_POST['title']); $i++) {
          $title = $_POST['title'][$i];
          $text = $_POST['text'][$i];
          $article = new Article($title, $text);
          $article->addArticle();
        }
      }



      function deleteArticle()
      {
        $id = intval($_GET['id']);
        echo($id);

        Article::deleteArticle($id);
        header('location: ../template/dashbord.php');
      }

      function displayArticlesSearch()
      {
        $countArticle = 0;
        $data = Article::displayArticle();

        foreach ($data as $row) {
          $countArticle++;
        ?>
          <tr>
            <td><?= $row['title']; ?></td>
            <td><?= $row['text']; ?></td>
          </tr>

      <?php }
        echo ($countArticle);
      }
      function cuntArticles()
      {
        $countArticle = 0;
        $data = Article::displayArticle();

        foreach ($data as $row) {
          $countArticle++;
        }

        echo ($countArticle);
      }

      function cuntAdmins()
      {

        echo (admin::countAdmins());
      }

      function updateArticle()
      {
          $id = $_POST['id'];
          $title = $_POST['title'];
          $text = $_POST['text'];
          $article = new Article($title, $text, $id);
          $article->updateArticle();
      
      }

