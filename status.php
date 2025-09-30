<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php
$fee = 0;
$identity = isset($_POST['identity']) ? $_POST['identity'] : '';
$meal = isset($_POST['meal']) ? $_POST['meal'] : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($identity == 'teacher') {
        $fee = 0;
    } elseif ($identity == 'student') {
        $fee = ($meal == 'yes') ? 60 : 0;
    }
}
?>
        <h1>迎新茶會報名</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label>身分：</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="identity" id="teacher" value="teacher" <?php echo ($identity == 'teacher') ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="teacher">老師</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="identity" id="student" value="student" <?php echo ($identity == 'student') ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="student">學生</label>
                </div>
            </div>
            <div class="mb-3">
                <label>是否用餐：</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="meal" id="meal_yes" value="yes" <?php echo ($meal == 'yes') ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="meal_yes">是</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="meal" id="meal_no" value="no" <?php echo ($meal == 'no') ? 'checked' : ''; ?> required>
                    <label class="form-check-label" for="meal_no">否</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">計算費用</button>
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="alert alert-info mt-3">
                費用：<?php echo $fee; ?> 元
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
