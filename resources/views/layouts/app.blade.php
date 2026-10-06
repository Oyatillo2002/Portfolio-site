<!DOCTYPE html>
<html lang="uz" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional Full-Stack Developer Portfolio">
    <title>@yield('title', 'Portfolio') - Ismingiz</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-900">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="text-2xl font-bold text-primary">
                    &lt;Ismingiz /&gt;
                </a>

                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="hover:text-primary transition-colors">Bosh sahifa</a>
                    <a href="#about" class="hover:text-primary transition-colors">Men haqimda</a>
                    <a href="#skills" class="hover:text-primary transition-colors">Ko'nikmalar</a>
                    <a href="#projects" class="hover:text-primary transition-colors">Loyihalar</a>
                    <a href="#contact" class="hover:text-primary transition-colors">Aloqa</a>
                </div>

                <button id="mobile-menu-btn" class="md:hidden">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <a href="#home" class="block py-2 hover:text-primary">Bosh sahifa</a>
                <a href="#about" class="block py-2 hover:text-primary">Men haqimda</a>
                <a href="#skills" class="block py-2 hover:text-primary">Ko'nikmalar</a>
                <a href="#projects" class="block py-2 hover:text-primary">Loyihalar</a>
                <a href="#contact" class="block py-2 hover:text-primary">Aloqa</a>
            </div>
        </div>
    </nav>

    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">&lt;Ismingiz /&gt;</h3>
                    <p class="text-gray-400">Full-Stack Developer</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Bog'lanish</h4>
                    <p class="text-gray-400">
                        <i class="fas fa-envelope mr-2"></i>
                        email@example.com
                    </p>
                    <p class="text-gray-400 mt-2">
                        <i class="fas fa-phone mr-2"></i>
                        +998 90 123 45 67
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Ijtimoiy tarmoqlar</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-primary text-2xl">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary text-2xl">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary text-2xl">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Ismingiz. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>
