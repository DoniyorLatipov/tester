<?php
// Подключаем файл конфигурации базы данных
require_once('config.php');

// Стартуем сессию
session_start();

// Подключаемся к базе данных
$db = new DatabaseConfig();
$conn = $db->connect();

// Получаем список страниц
$stmt = $conn->query("SELECT * FROM blogs ORDER BY id ASC");
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/header_logo.svg" type="image/x-icon">
    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Style CSS -->
</head>

<body>

    <div class="wrapper">

        <section class="theory">
            <div class="d-flex align-items-stretch main_container">

                <div class="theory__left w-100">
                    <h1 class="text-center main_title theory__title">Список статей<a class="text-danger"
                            data-toggle="tooltip" data-placement="top" title="Создать тему" href="add-post.php">+</a>
                    </h1>
                    <a href="/">Главная <-</a>
                    <div class="d-flex align-items-stretch online_trener">
                        <table class="table table-bordered table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название поста</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($posts as $post): ?>
                                    <tr id="row-<?php echo $post['id']; ?>">
                                        <td><?php echo $post['id']; ?></td>
                                        <td><?php echo htmlspecialchars($post['name']); ?></td>
                                        <td>
                                            <a href="/post.php?id=<?php echo $post['id']; ?>"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="edit-post.php?id=<?php echo $post['id']; ?>"
                                                class="btn btn-success btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="event.preventDefault(); deleteTheme(<?php echo $post['id']; ?>);">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </section>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/mode-python.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/theme-twilight.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Main JS -->
    <script src="/js/main.js"></script>
    <script>
        function deleteTheme(id) {
            if (confirm('Вы уверены, что хотите удалить эту статью?')) {
                $.ajax({
                    url: 'delete-post.php',
                    type: 'POST',
                    data: { id: id },
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            // Удаляем строку из DOM
                            $('#row-' + id).remove();
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function () {
                        toastr.error('Произошла ошибка при удалении.');
                    }
                });
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            // Проверяем, есть ли сообщение для toastr
            <?php if (isset($_SESSION['toastr'])): ?>
                toastr.success('<?php echo $_SESSION['toastr']; ?>');
                <?php unset($_SESSION['toastr']); // Удаляем сообщение из сессии после отображения ?>
            <?php endif; ?>
        });
    </script>
</body>

</html>