<?php
include 'header.html';

// Получение данных из формы
$fullname = $_POST['fullname'] ?? 'Не указано';
$email = $_POST['email'] ?? 'Не указано';
$message = $_POST['message'] ?? 'Не указано';
$type = $_POST['type'] ?? 'Не указано';
$source = $_POST['source'] ?? 'Не указано';
$agreement = isset($_POST['agreement']) ? 'Дал согласие' : 'Не дал согласие';

// Обработка загруженного файла
$file = $_FILES['file']['name'] ?? 'Файл не прикреплен';

?>

<main>
    <h2>Спасибо за ваше сообщение!</h2>
    <p><strong>ФИО:</strong> <?php echo htmlspecialchars($fullname); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Тема обращения:</strong> <?php echo htmlspecialchars($type); ?></p>
    <p><strong>Сообщение:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
    <p><strong>Источник информации:</strong> <?php echo htmlspecialchars($source); ?></p>
    <p><strong>Согласие на обработку данных:</strong> <?php echo htmlspecialchars($agreement); ?></p>
    <p><strong>Прикрепленный файл:</strong> <?php echo htmlspecialchars($file); ?></p>

    <form action="index.php" method="POST">
        <input type="hidden" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
        <input type="hidden" name="type" value="<?php echo htmlspecialchars($type); ?>">
        <input type="hidden" name="source" value="<?php echo htmlspecialchars($source); ?>">
        <input type="hidden" name="agreement" value="<?php echo isset($_POST['agreement']) ? 'on' : ''; ?>">
        <button type="submit">Заполнить снова</button>
    </form>
</main>

</body>
</html>
