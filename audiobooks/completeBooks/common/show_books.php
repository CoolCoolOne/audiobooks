<?php require_once './logic/db.php';

$sql = 'SELECT books.id, books.name, books.duration, 
GROUP_CONCAT(genres.genre SEPARATOR ", " ) AS fin_genres
FROM books 
INNER JOIN books_genres ON books.id = books_genres.book_id
INNER JOIN genres ON books_genres.genre_id = genres.id
GROUP BY books.id, books.name, books.duration';

$result = $pdo->query($sql);

while ($book = $result->fetch(PDO::FETCH_OBJ)) : ?>

    <div class="book_container" id=<?php echo 'book_' . $book->id; ?> data-movie-id=<?php echo $book->id; ?>>

        <h3 class="book_title">
            <?php echo $book->name; ?>
        </h3>

        <h4 class="book_genre">
            <?php echo $book->fin_genres; ?>
        </h4>

        <h4 class="book_duration">
            Время чтения: <?php echo $book->duration; ?> часов
        </h4>

    </div>

    <hr>

<?php endwhile; ?>