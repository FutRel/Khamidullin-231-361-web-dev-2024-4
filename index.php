<?php
include 'header.html';

$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
$type = $_POST['type'] ?? '';
$source = $_POST['source'] ?? '';
$agreement = isset($_POST['agreement']) ? 'checked' : '';

?>

<main>
    <form action="home.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fullname">ФИО:</label>
            <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email">Ваш e-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="example@mail.com" required>
        </div>
        
        <div class="form-group">
            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="4" required><?php echo htmlspecialchars($message); ?></textarea>
        </div>

        <div class="form-group">
            <label for="type">Тема обращения:</label>
            <select id="type" name="type" required>
                <option value="Предложение" <?php echo ($type == 'Предложение') ? 'selected' : ''; ?>>Предложение</option>
                <option value="Жалоба" <?php echo ($type == 'Жалоба') ? 'selected' : ''; ?>>Жалоба</option>
            </select>
        </div>

        <div class="form-group">
            <label>Источник:</label>
            <div>
                <input type="radio" id="internet" name="source" value="Реклама из интернета" <?php echo ($source == 'Реклама из интернета') ? 'checked' : ''; ?>>
                <label for="internet">Реклама из интернета</label>
            </div>
            <div>
                <input type="radio" id="friends" name="source" value="Рассказали друзья" <?php echo ($source == 'Рассказали друзья') ? 'checked' : ''; ?>>
                <label for="friends">Рассказали друзья</label>
            </div>
        </div>

        <div class="form-group checkbox-group">
            <label for="agreement">
            <input type="checkbox" id="agreement" name="agreement" <?php echo $agreement; ?>>
                Даю согласие на обработку данных
            </label>
        </div>

        <div class="form-group">
            <label for="file">Прикрепить файл:</label>
            <input type="file" id="file" name="file">
        </div>

        <div class="form-group">
            <button type="submit">Отправить</button>
        </div>
    </form>
</main>

</body>
</html>
