<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
        <script>
            let sectionCount = 1;

            function addFormSection() {
                sectionCount++;

                const formContainer = document.getElementById('formContainer');
                const formSection = document.getElementById('formSection');
                const newFormSection = formSection.cloneNode(true);

                // Update labels, placeholders, and ids with the new section count
                newFormSection.querySelectorAll('label, input').forEach(element => {
                    if (element.htmlFor) {
                        element.htmlFor += sectionCount;
                    }
                    if (element.id) {
                        element.id += sectionCount;
                    }
                    if (element.name) {
                        element.name += sectionCount;
                    }
                    if (element.placeholder) {
                        element.placeholder = element.placeholder.replace(/\d+/, sectionCount);
                    }
                    if (element.tagName === 'LABEL' && element.htmlFor.includes('prostu')) {
                        element.innerText = `Program Studi ${sectionCount}`;
                    }
                });

                // Update input values for the new section
                newFormSection.querySelectorAll('input[type="text"]').forEach(input => {
                    input.value = '';
                });

                newFormSection.querySelectorAll('input[type="text"], input[type="file"]').forEach(input => {
                    input.value = '';
                });

                // Add the new section to the form container with a horizontal rule
                const hr = document.createElement('hr');
                hr.className = "border-t border-gray-800 my-4";
                formContainer.appendChild(hr);
                formContainer.appendChild(newFormSection);
            }
            function openModal() {
                document.getElementById('modal').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('modal').classList.add('hidden');
            }
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body class="font-sans antialiased">
        <div class="flex h-screen shadow-lg">
            @include('dashboard.layout.sidebar')
            <div class="flex-1 p-6 bg-white">
                @include('dashboard.layout.navbar')
                @yield('dashboard')
            </div>
        </div>
    </body>
</html>
