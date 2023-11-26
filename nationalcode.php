<?php
// تابعی برای محاسبه رقم کنترل کد ملی
function calculate_control_digit($code_melli) {
    // متغیری برای ذخیره مجموع حاصل ضرب هر رقم در وزن مربوطه
    $sum = 0;
    // حلقه‌ای برای بررسی هر رقم از سمت چپ به راست
    for ($i = 0; $i < 9; $i++) {
        // تبدیل هر رقم به عدد صحیح
        $digit = intval($code_melli[$i]);
        // محاسبه وزن هر رقم با توجه به موقعیت آن
        $weight = 10 - $i;
        // اضافه کردن حاصل ضرب رقم در وزن به مجموع
        $sum += $digit * $weight;
    }
    // محاسبه باقیمانده تقسیم مجموع بر ۱۱
    $remainder = $sum % 11;
    // محاسبه رقم کنترل با استفاده از فرمول زیر
    // r = \frac{10 - \left(\sum_{i=1}^{9} i \times d_i\right) \bmod 11}{1}
    $control_digit = ($remainder < 2) ? $remainder : 11 - $remainder;
    // برگرداندن رقم کنترل
    return $control_digit;
}

// تابعی برای بررسی صحت کد ملی
function check_code_melli($code_melli) {
    // چک کردن طول کد ملی
    if (strlen($code_melli) != 10) {
        // اگر طول کد ملی ۱۰ رقم نباشد، خروجی false برگرداند
        return false;
    }
    // محاسبه رقم کنترل کد ملی با استفاده از تابع قبلی
    $control_digit = calculate_control_digit($code_melli);
    // تبدیل رقم کنترل به رشته
    $control_digit = strval($control_digit);
    // بررسی اینکه آیا رقم کنترل با رقم آخر کد ملی برابر است
    if ($control_digit == $code_melli[9]) {
        // اگر برابر باشند، خروجی true برگرداند
        return true;
    } else {
        // در غیر این صورت، خروجی false برگرداند
        return false;
    }
}

// تست کردن توابع برای چند مثال
$examples = array("0010000011", "0020000018", "0030000015", "0040000012", "0050000019");
foreach ($examples as $example) {
    echo "کد ملی: $example\n";
    if (check_code_melli($example)) {
        echo "این کد ملی صحیح است.\n";
    } else {
        echo "این کد ملی اشتباه است.\n";
    }
    echo "\n";
}
?>




