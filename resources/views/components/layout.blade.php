<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shaqu's Expense Tracker</title>
    <link href="/bootstrap-5.3.5-dist/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/plugins/virtualSelect/virtual-select.min.css">
    <script src="assets/plugins/virtualSelect/virtual-select.min.js">
    <link rel="stylesheet" href="node_modules/virtual-select-plugin/dist/virtual-select.min.css">
    <script src="node_modules/virtual-select-plugin/dist/virtual-select.min.js"></script>
    <link rel="stylesheet" href="node_modules/tooltip-plugin/dist/tooltip.min.css">
    <script src="node_modules/tooltip-plugin/dist/tooltip.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>



</head>

<body>
    <header>
        <nav class="fixed top-0 left-0 right-0 bg-red-50 shadow-md z-50">
            <div class="container mx-auto p-3 flex justify-between items-center">
                <h1 class="text-lg font-bold">Shaqu's Project</h1>
                <div class="flex items-center">
                    <a href="/homepage" class="me-3 text-gray-700 hover:text-blue-500">Expense Tracker</a>
                    <a href="/getPluginTemplate" class="me-3 text-gray-700 hover:text-blue-500">Template Page</a>
                </div>
                <div class="flex items-end">
                    <button class="bg-red-400 hover:bg-red-500 text-white py-2 px-4 rounded ">Logout</button>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-30">
        {{$slot}}
    </main>

    <!-- modals -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

    <!--  js -->
    <script src="{{ mix('js/app.js') }}"></script>

    <!--  virtual select plugin -->
    <link rel="stylesheet" href="assets/plugins/virtualSelect/tooltip.min.css">
    <script src="assets/plugins/virtualSelect/tooltip.min.js">





</body>
</html>
