<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<?php
require_once 'nav.php';
require 'config.php';

$books = \Models\Book::all()->where('id', '<', 130);

echo '<table class="table table-hover">
    <tr>
        <th>Имя Автора</th>
        <th>Название книги</th>
        <th>Отрывок из книги</th>
    </tr>';
    foreach ($books as $book)
    {
        echo '<tr>';
        echo '<td>'.$book->user->name.' '.$book->user->last_name.'</td>';
        echo '<td>'.$book->title.'</td>';
        echo '<td>'.$book->little_text.'</td>';
        echo '</tr>';
    }

echo '</table>';


