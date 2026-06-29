```php
<?php
$appNameAr = "ديون - لنا ولهم";
$appNameEn = "Duyoon - For Us & Them";
$email = "ksaxxxx@gmail.com";
$lastUpdated = "29 يونيو 2026";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سياسة الخصوصية - <?php echo $appNameAr; ?></title>
    <style>
        body {
            font-family: Arial, Tahoma, sans-serif;
            background: #f7f9fb;
            color: #222;
            line-height: 1.9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 30px;
        }
        h1, h2, h3 {
            color: #0b3d2e;
        }
        .en {
            direction: ltr;
            text-align: left;
            margin-top: 50px;
            border-top: 1px solid #ddd;
            padding-top: 30px;
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #666;
            text-align: center;
        }
        a {
            color: #0b7a55;
        }
    </style>
</head>
<body>
<div class="container">

    <h1>سياسة الخصوصية</h1>
    <h2><?php echo $appNameAr; ?></h2>
    <p><strong>آخر تحديث:</strong> <?php echo $lastUpdated; ?></p>

    <p>
        نحن في تطبيق <strong><?php echo $appNameAr; ?></strong> نحترم خصوصيتك ونلتزم بحماية بياناتك.
        توضح هذه السياسة كيفية جمع المعلومات واستخدامها وحمايتها عند استخدام التطبيق.
    </p>

    <h3>المعلومات التي قد يتم تخزينها</h3>
    <p>
        قد يقوم التطبيق بتخزين بيانات العملاء، سجلات الديون، المدفوعات، إعدادات التطبيق،
        والنسخ الاحتياطية التي يختار المستخدم إنشاؤها.
    </p>

    <h3>استخدام المعلومات</h3>
    <p>
        تُستخدم المعلومات لإدارة الديون، متابعة السداد، عرض التقارير والإحصائيات،
        وتحسين تجربة استخدام التطبيق.
    </p>

    <h3>مشاركة البيانات</h3>
    <p>
        لا نقوم ببيع أو تأجير أو مشاركة بيانات المستخدم مع أي طرف ثالث،
        إلا إذا كان ذلك مطلوبًا بموجب القانون أو بموافقة المستخدم.
    </p>

    <h3>تخزين البيانات والأمان</h3>
    <p>
        يتم تخزين البيانات محليًا على جهاز المستخدم أو من خلال خدمات النسخ الاحتياطي
        التي يفعّلها المستخدم مثل iCloud أو Firebase عند توفرها.
    </p>

    <h3>خدمات الطرف الثالث</h3>
    <p>
        قد يستخدم التطبيق خدمات مثل Apple iCloud أو Firebase لدعم النسخ الاحتياطي،
        تسجيل الدخول، أو الإشعارات، وتخضع هذه الخدمات لسياسات الخصوصية الخاصة بها.
    </p>

    <h3>خصوصية الأطفال</h3>
    <p>
        التطبيق غير مخصص للأطفال دون سن 13 عامًا، ولا نقوم بجمع بيانات الأطفال عن قصد.
    </p>

    <h3>حقوق المستخدم</h3>
    <p>
        يمكن للمستخدم تعديل بياناته أو حذفها أو إيقاف النسخ الاحتياطي أو حذف التطبيق
        لإزالة البيانات المخزنة محليًا.
    </p>

    <h3>التواصل</h3>
    <p>
        لأي استفسار بخصوص الخصوصية، يمكن التواصل عبر البريد الإلكتروني:
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
    </p>

    <div class="en">
        <h1>Privacy Policy</h1>
        <h2><?php echo $appNameEn; ?></h2>
        <p><strong>Last Updated:</strong> June 29, 2026</p>

        <p>
            We respect your privacy and are committed to protecting your data.
            This Privacy Policy explains how information is collected, used, and protected
            when using the application.
        </p>

        <h3>Information We May Store</h3>
        <p>
            The app may store customer information, debt records, payment records,
            app settings, and backup data created by the user.
        </p>

        <h3>Use of Information</h3>
        <p>
            Information is used to manage debts, track payments, display reports and statistics,
            and improve the user experience.
        </p>

        <h3>Data Sharing</h3>
        <p>
            We do not sell, rent, or share user data with third parties except when required
            by law or with the user's consent.
        </p>

        <h3>Data Storage and Security</h3>
        <p>
            Data is stored locally on the user's device or through backup services enabled
            by the user, such as iCloud or Firebase where available.
        </p>

        <h3>Third-Party Services</h3>
        <p>
            The app may use services such as Apple iCloud or Firebase for backup,
            authentication, or notifications. These services are governed by their own
            privacy policies.
        </p>

        <h3>Children's Privacy</h3>
        <p>
            The app is not intended for children under the age of 13 and does not knowingly
            collect data from children.
        </p>

        <h3>User Rights</h3>
        <p>
            Users may edit or delete their data, disable backups, or delete the app
            to remove locally stored data.
        </p>

        <h3>Contact</h3>
        <p>
            For privacy-related questions, contact us at:
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </p>
    </div>

    <div class="footer">
        © <?php echo date("Y"); ?> <?php echo $appNameAr; ?>. جميع الحقوق محفوظة.
    </div>

</div>
</body>
</html>
```
