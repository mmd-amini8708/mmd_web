<?php include("head.html"); ?>


    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
        }
        .h1 {
            color: #0d6efd;
            margin-bottom: 20px;
        }
        #result {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center h1">محاسبه شاخص توده بدنی (BMI)</h1>
        <form id="bmiForm" class="bg-light p-4 rounded shadow">
            <div class="mb-3">
                <label for="weight" class="form-label">وزن (کیلوگرم):</label>
                <input type="number" class="form-control" id="weight" required>
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">قد (سانتی‌متر):</label>
                <input type="number" class="form-control" id="height" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">محاسبه کن</button>
        </form>

        <div id="result" class="text-center mt-4"></div>
    </div>

    <!-- لینک فایل JS بوت‌استرپ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('bmiForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const weight = parseFloat(document.getElementById('weight').value);
            const height = parseFloat(document.getElementById('height').value) / 100; // تبدیل قد به متر

            if (isNaN(weight) || isNaN(height) || height <= 0 || weight <= 0) {
                document.getElementById('result').innerText = "لطفاً مقادیر معتبر وارد کنید.";
                return;
            }

            const bmi = (weight / (height * height)).toFixed(2);

            let category = '';
            if (bmi < 18.5) {
                category = 'کم‌وزن';
            } else if (bmi >= 18.5 && bmi < 24.9) {
                category = 'نرمال';
            } else if (bmi >= 25 && bmi < 29.9) {
                category = 'اضافه‌وزن';
            } else {
                category = 'چاق';
            }

            document.getElementById('result').innerText = `BMI شما: ${bmi} (${category})`;
        });
    </script>

<?php include("foot.html") ;?>
