<?php
// Подключаем файл конфигурации базы данных
require_once('config.php');

// Стартуем сессию
session_start();
$db = new DatabaseConfig();
$conn = $db->connect();
$sql = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'blogs' AND COLUMN_NAME = 'category'";
$query = $conn->query($sql);
$row = $query->fetch(PDO::FETCH_ASSOC);

$enumStr = $row['COLUMN_TYPE'];
$enumStr = str_replace(["enum(", ")", "'"], "", $enumStr);
$categories = explode(",", $enumStr);

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $name = $_POST['name'] ?? '';
    $category = $_POST['category'] ?? '';
    $image = $_POST['post_image'] ?? '';
    $text = $_POST['post_text'] ?? '';
    $title = $_POST['title'] ?? '';
    $canonical = $_POST['canonical'] ?? '';
    $description = $_POST['description'] ?? '';
    $keywords = $_POST['keywords'] ?? '';

    // SQL-запрос на вставку данных
    $stmt = $conn->prepare("INSERT INTO blogs 
        (`name`, `category`, `image`, `text`, `title`, `canonical`, `description`, `keywords`) 
        VALUES (:name, :category, :image, :text, :title, :canonical, :description, :keywords)");

    // Привязываем параметры
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':text', $text);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':canonical', $canonical);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':keywords', $keywords);

    // Выполняем запрос
    if ($stmt->execute()) {
        $_SESSION['toastr'] = 'Пост успешно добавлен';
    } else {
        $_SESSION['toastr'] = 'Ошибка при добавлении поста';
    }

    header("Location: admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/header_logo.svg" type="image/x-icon">
    <title><?php echo $page_title; ?> - Создание страницы</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <!-- Подключение стилей Summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper">
        <header class="header theory_header">
            <div class="main_container d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center header__block_left">
                    <ul class="d-flex align-items-center header__navs">
                        <li>
                            <a href="admin.php">Вернуться в админ панель</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <section class="theory">
            <div class="d-flex align-items-stretch main_container">

                <div class="theory__left">
                    <h1 class="text-center main_title theory__title">Создание статьи</h1>

                    <div class="d-flex align-items-stretch online_trener">
                        <form id="page_form" method="post" class="d-flex flex-column w-100">
                            <div class="d-flex flex-column align-items-start form_group mb-2">
                                <label class="mb-1" for="">Название поста <sup class="text-danger">*</sup></label>
                                <input type="text" id="name" name="name" class="main_input" require>
                            </div>
                            <div class="d-flex flex-column align-items-start form_group mb-2">
                                <label class="mb-1" for="">Категория поста <sup class="text-danger">*</sup></label>
                                <select name="category">
                                    <?php foreach ($categories as $category): ?>
                                        <option>
                                            <?= htmlspecialchars($category) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column align-items-start form_group mb-2">
                                <label class="mb-1" for="">URL(URI) картинки <sup class="text-danger">*</sup></label>
                                <input type="text" id="post_image" name="post_image" class="main_input" require>
                            </div>
                            <strong>SEO</strong>
                            <div class="d-flex flex-column align-items-start form_group mb-2">
                                <label class="mb-1" for="">title <sup class="text-danger">*</sup></label>
                                <input type="text" id="name" name="title" class="main_input" require>
                            </div>
                            <div class="d-flex flex-column align-items-start form_group mb-2">
                                <label class="mb-1" for="">canonical <sup class="text-danger">*</sup></label>
                                <input type="text" id="name" name="canonical" class="main_input" require>
                            </div>
                            <div class="d-flex flex-column align-items-start form_group mb-2">
                                <label class="mb-1" for="">description <sup class="text-danger">*</sup></label>
                                <input type="text" id="post_image" name="description" class="main_input" require>
                            </div>
                            <div class="d-flex flex-column align-items-start form_group mb-2">
                                <label class="mb-1" for="">keywords <sup class="text-danger">*</sup></label>
                                <input type="text" id="post_image" name="keywords" class="main_input" require>
                            </div>
                            <tr>
                                <td>Содержимое поста </td>
                                <!--<td><textarea id="problem_statement" class="main_input"></textarea></td>-->
                                <td>
                                    <textarea name="post_text" id="post_text" class="main_input text-100">
                                    </textarea>
                                </td>
                            </tr>

                            <div class="d-flex align-items-center justify-content-start form_submit">
                                <button type="submit" class="btn_danger">Сохранить</button>
                            </div>
                        </form>
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
    <!-- Подключение TinyMCE через CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.0/tinymce.min.js"
        integrity="sha512-/4EpSbZW47rO/cUIb0AMRs/xWwE8pyOLf8eiDWQ6sQash5RP1Cl8Zi2aqa4QEufjeqnzTK8CLZWX7J5ZjLcc1Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Main JS -->
    <script src="/js/main.js"></script>

    <script>
        tinymce.init({
            selector: '#post_text',
            plugins: 'link image media table code lists',
            menubar: true,
            branding: false,
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            images_upload_url: 'postAcceptor.php',
            forced_root_block: false,  // Отключает авто-добавление <p>
            convert_newlines_to_brs: true, // Преобразует \n в <br>
            remove_linebreaks: false // Запрещает TinyMCE удалять пустые строки
        });

    </script>

</body>

</html>