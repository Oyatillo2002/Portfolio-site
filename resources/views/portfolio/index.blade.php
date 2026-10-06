@extends('layouts.app')

@section('title', 'Bosh sahifa')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center bg-gradient-to-br from-primary/10 to-secondary/10">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <p class="text-primary font-semibold mb-2">Salom, men</p>
                    <h1 class="text-5xl md:text-6xl font-bold mb-4">
                        Ismingiz <span class="text-primary">Familiyangiz</span>
                    </h1>
                    <h2 class="text-2xl md:text-3xl text-gray-600 mb-6">
                        Full-Stack Developer
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Zamonaviy web ilovalar yaratishda tajribaga ega. Laravel, Vue.js va boshqa texnologiyalar bilan
                        ishlayman.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#projects" class="btn-primary">
                            <i class="fas fa-code mr-2"></i>Loyihalarim
                        </a>
                        <a href="{{ asset('resume.pdf') }}" download
                            class="bg-white border-2 border-primary text-primary hover:bg-primary hover:text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300">
                            <i class="fas fa-download mr-2"></i>CV Yuklash
                        </a>
                    </div>
                </div>
                <div class="hidden md:block animate-fade-in">
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary rounded-full blur-3xl opacity-20"></div>
                        <img src="https://via.placeholder.com/500x500" alt="Profile"
                            class="relative rounded-full border-8 border-white shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-4xl font-bold mb-4">Men haqimda</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <h3 class="text-2xl font-semibold mb-4">Professional Developer</h3>
                    <p class="text-gray-600 mb-4">
                        3+ yillik tajribaga ega Full-Stack Developer. Zamonaviy web texnologiyalar bilan ishlayman
                        va foydalanuvchilarga qulay, tezkor va xavfsiz ilovalar yarataman.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Jamoada ishlash, muammolarni hal qilish va doimiy o'rganish mening asosiy kuchli tomonlarim.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>Laravel</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>Vue.js</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>MySQL</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-primary mr-2"></i>
                            <span>TailwindCSS</span>
                        </div>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="card p-6 text-center">
                            <div class="text-4xl font-bold text-primary mb-2">50+</div>
                            <div class="text-gray-600">Loyihalar</div>
                        </div>
                        <div class="card p-6 text-center">
                            <div class="text-4xl font-bold text-primary mb-2">3+</div>
                            <div class="text-gray-600">Yillik tajriba</div>
                        </div>
                        <div class="card p-6 text-center">
                            <div class="text-4xl font-bold text-primary mb-2">30+</div>
                            <div class="text-gray-600">Mijozlar</div>
                        </div>
                        <div class="card p-6 text-center">
                            <div class="text-4xl font-bold text-primary mb-2">100%</div>
                            <div class="text-gray-600">Muvaffaqiyat</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-4xl font-bold mb-4">Texnik ko'nikmalar</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($skills as $category => $categorySkills)
                    <div class="card p-6 animate-on-scroll">
                        <h3 class="text-xl font-semibold mb-4 text-primary">{{ $category }}</h3>
                        <div class="space-y-4">
                            @foreach ($categorySkills as $skill)
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="font-medium">{{ $skill->name }}</span>
                                        <span class="text-gray-600">{{ $skill->proficiency }}%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-primary h-2 rounded-full transition-all duration-1000"
                                            style="width: {{ $skill->proficiency }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-4xl font-bold mb-4">Tanlangan loyihalar</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($featuredProjects as $project)
                    <div class="card overflow-hidden group animate-on-scroll">
                        <div class="relative overflow-hidden">
                            <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://via.placeholder.com/400x300' }}"
                                alt="{{ $project->title }}"
                                class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                            <div
                                class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <a href="{{ route('project.show', $project) }}" class="btn-primary">
                                    Batafsil ko'rish
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach (array_slice($project->technologies ?? [], 0, 3) as $tech)
                                    <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('projects') }}" class="btn-primary">
                    Barcha loyihalar <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-4xl font-bold mb-4">Tajriba va ta'lim</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                @if (isset($experiences['work']))
                    <div class="animate-on-scroll">
                        <h3 class="text-2xl font-semibold mb-6 flex items-center">
                            <i class="fas fa-briefcase text-primary mr-3"></i>
                            Ish tajribasi
                        </h3>
                        <div class="space-y-6">
                            @foreach ($experiences['work'] as $exp)
                                <div class="border-l-4 border-primary pl-6 pb-6 relative">
                                    <div class="absolute -left-2 top-0 w-4 h-4 bg-primary rounded-full"></div>
                                    <h4 class="font-semibold text-lg">{{ $exp->title }}</h4>
                                    <p class="text-primary">{{ $exp->company }}</p>
                                    <p class="text-gray-600 text-sm mb-2">
                                        {{ $exp->start_date->format('M Y') }} -
                                        {{ $exp->end_date ? $exp->end_date->format('M Y') : 'Hozirgacha' }}
                                    </p>
                                    <p class="text-gray-600">{{ $exp->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if (isset($experiences['education']))
                    <div class="animate-on-scroll">
                        <h3 class="text-2xl font-semibold mb-6 flex items-center">
                            <i class="fas fa-graduation-cap text-primary mr-3"></i>
                            Ta'lim
                        </h3>
                        <div class="space-y-6">
                            @foreach ($experiences['education'] as $exp)
                                <div class="border-l-4 border-primary pl-6 pb-6 relative">
                                    <div class="absolute -left-2 top-0 w-4 h-4 bg-primary rounded-full"></div>
                                    <h4 class="font-semibold text-lg">{{ $exp->title }}</h4>
                                    <p class="text-primary">{{ $exp->company }}</p>
                                    <p class="text-gray-600 text-sm mb-2">
                                        {{ $exp->start_date->format('M Y') }} -
                                        {{ $exp->end_date ? $exp->end_date->format('M Y') : 'Hozirgacha' }}
                                    </p>
                                    <p class="text-gray-600">{{ $exp->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-4xl font-bold mb-4">Bog'lanish</h2>
                <div class="w-20 h-1 bg-primary mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="animate-on-scroll">
                    <h3 class="text-2xl font-semibold mb-6">Keling, birga ishlaylik!</h3>
                    <p class="text-gray-600 mb-8">
                        Loyihangiz yoki hamkorlik bo'yicha savollaringiz bormi? Menga xabar yuboring,
                        tez orada javob beraman.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Email</p>
                                <p class="text-gray-600">email@example.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-primary"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Telefon</p>
                                <p class="text-gray-600">+998 90 123 45 67</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <p class="font-semibold">Manzil</p>
                                <p class="text-gray-600">Toshkent, O'zbekiston</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="card p-8">
                        @csrf
                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-2">Ism</label>
                            <input type="text" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-2">Mavzu</label>
                            <input type="text" name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-2">Xabar</label>
                            <textarea name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary"></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full">
                            <i class="fas fa-paper-plane mr-2"></i>Yuborish
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
