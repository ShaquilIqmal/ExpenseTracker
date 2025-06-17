<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shaqu's Expense Tracker - Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <main class="w-100" style="max-width: 400px;">
        <div class="card shadow-sm p-4">
            {{$slot}}
        </div>
    </main>

</body>
</html>