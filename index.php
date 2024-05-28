<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="">
            <p class="h1">اجمالي الأجرة</p>
            <label for="ogra-price" class="ogra-price">الاجرة كام</label>
            <input type="text" class="ogra-price-input" name="ogra-price-input" id="">
            <label for="indi-number"  class="indi-number">عدد الافراد</label>
            <input type="text" class="indi-number-input" name="indi-number-input" id="">
            <input type="submit" name="submit1" value="احسب" class="submit1">
        
        <?php
            $total = 0;
            $ogra = 0;
            if (isset($_POST['submit1'])) {
                if (empty($_POST['ogra-price-input'])){
                    echo '<p class="total">اكتب سعر الاجرة</p>';
                } elseif (empty($_POST['indi-number-input'])) {
                    echo '<p class="total">اكتب كام نفر في العربية</p>';
                } else {
                    $total = $_POST['ogra-price-input'] * $_POST['indi-number-input'];
                    $ogra = $_POST['ogra-price-input'];
                    echo '<p class="total"> اجمالي الاجرة: '. $total . '</p>';
                }
            }
        ?>
        <div class="sepa"></div>
        <p class="h2">الباقي</p>
        <label for="indi-number-remaining" class="indi-number-remaining">عدد الافراد</label>
        <input type="text" class="indi-number-remaining-input" name="indi-number-remaining" id="">
        <label for="collected" class="collected">لميت كام</label>
        <input type="text" class="collected-input" name="collected">
        <input type="submit" name="submit2" value="احسب" class="submit2">
        <!-- <p class="rem">الباقي = 50</p> -->
        </form>
        <?php
            if (isset($_POST['submit2'])) {
                if (empty($_POST['ogra-price-input'])) {
                    echo '<p class="rem">اكتب سعر الاجرة</p>';
                } elseif (empty($_POST['collected'])) {
                    echo '<p class="rem">اكتب جمعت كام</p>';
                } elseif (empty($_POST['indi-number-remaining'])){
                    echo '<p class="rem">اكتب جمعت من كام نفر</p>';
                } else {
                    $ogra = $_POST['ogra-price-input'];
                    echo '<p class="rem"> الباقي: '. $_POST['collected'] - ($ogra * $_POST['indi-number-remaining']) . '</p>';
                    // echo $ogra;
                }
            }
        ?>
    </div>
</body>
</html>