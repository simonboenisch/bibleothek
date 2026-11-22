<!doctype html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <h2>Bibliothek</h2>
  </header>
  <main>
    <div class="tabelDiv">
      <table class="table">
        <caption>
          Personen mit Bibliotheksverbot
        </caption>
        <thead>
          <tr>
            <td>Name</td>
            <td>Klasse</td>
            <td>Von</td>
            <td>Bis</td>
          </tr>
        </thead>
        <tbody>
          <?php

          use Dom\Sqlite;

          $db = new SQLite3("data.db");
          $result = $db->query('SELECT name, class,
          von, bis FROM banned');
          while ($row =
            $result->fetchArray(SQLITE3_ASSOC)
          ): ?>
            <tr style="border-bottom: 2px solid gray">
              <td>
                <?= htmlspecialchars((string) $row['name'], ENT_QUOTES, 'UTF-8') ?>
              </td>
              <td>
                <?= htmlspecialchars((string) $row['class'], ENT_QUOTES, 'UTF-8') ?>
              </td>
              <td>
                <?= htmlspecialchars((string) $row['von'], ENT_QUOTES, 'UTF-8') ?>
              </td>
              <td>
                <?= htmlspecialchars((string) $row['bis'], ENT_QUOTES, 'UTF-8') ?>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

    <section class="add">
      <form action="add.php" method="post" class="addform">
        <h3>Schüler hinzufügen:</h3>
        <div>
          <label for="name">Name:</label>
          <input type="text" name="name" />
        </div>
        <div>
          <label for="class">Klasse:</label>
          <input type="text" name="class" />
        </div>
        <div>
          <label for="von">Von:</label>
          <input type="text" name="von" />
        </div>
        <div id="bis">
          <label for="bis">Bis:</label>
          <input type="text" name="bis" />
        </div>
        <div>
          <input type="submit" class="submit" />
        </div>
      </form>

      <form action="delete.php" method="post" class="addform" style="border-top: 1px solid black;">
        <h3>Schüler löschen:</h3>
        <label for="name">Name Schüler:</label>
        <input type="text" name="name">
        <input type="submit" class="submit">
      </form>
    </section>
  </main>
</body>

</html>