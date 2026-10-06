@extends('layouts.app')

@section('title', $portfolioConfig['name'] . ' - Portfolio')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center bg-gradient-to-br from-blue-50 to-indigo-50 pt-16">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in order-2 md:order-1">
                <p class="text-blue-600 font-semibold mb-2 text-lg">Salom, men</p>
                <h1 class="text-4xl md:text-6xl font-bold mb-4 text-gray-900 leading-tight">
                    {{ $portfolioConfig['name'] }}
                </h1>
                <h2 class="text-2xl md:text-3xl text-gray-600 mb-6 font-medium">
                    {{ $portfolioConfig['title'] }}
                </h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    {{ $portfolioConfig['bio'] }}
                </p>
                
                <div class="flex flex-wrap gap-4 mb-8">
                    <a href="#projects" class="btn-primary shadow-lg shadow-blue-500/30">
                        <i class="fas fa-code mr-2"></i>Loyihalarim
                    </a>
                    <!-- Resume PDF ni public papkasiga 'resume.pdf' nomi bilan qo'ygan bo'lishingiz kerak -->
                    <a href="{{ asset('Oyatillo_Xabibullayev_Resume.pdf') }}" download class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 shadow-md">
                        <i class="fas fa-download mr-2"></i>CV Yuklash
                    </a>
                </div>
                
                <!-- Social Links -->
                <div class="flex space-x-6">
                    @if(isset($portfolioConfig['socials']['github']))
                        <a href="{{ $portfolioConfig['socials']['github'] }}" target="_blank" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-blue-600 hover:text-white transition-all duration-300">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    @endif
                    @if(isset($portfolioConfig['socials']['telegram']))
                        <a href="{{ $portfolioConfig['socials']['telegram'] }}" target="_blank" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-blue-500 hover:text-white transition-all duration-300">
                            <i class="fab fa-telegram text-xl"></i>
                        </a>
                    @endif
                    <a href="mailto:{{ $portfolioConfig['contact']['email'] }}" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-red-500 hover:text-white transition-all duration-300">
                        <i class="fas fa-envelope text-xl"></i>
                    </a>
                </div>
            </div>
            
            <!-- Profile Image -->
            <div class="hidden md:flex justify-center order-1 md:order-2 animate-fade-in">
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-400 rounded-full blur-3xl opacity-20 animate-pulse"></div>
                    <!-- O'z rasmingizni public/img/profile.jpg ga qo'ying -->
                    <img src="{{ asset('img/High-Agency.jpg') }}" alt="{{ $portfolioConfig['name'] }}" 
                         class="relative w-72 h-72 md:w-96 md:h-96 object-cover rounded-full border-8 border-white shadow-2xl transform hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About & Stats Section -->
<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Men haqimda</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 items-start">
            <div class="animate-on-scroll space-y-6">
                <h3 class="text-2xl font-semibold text-gray-800">Professional Yondashuv</h3>
                <p class="text-gray-600 leading-relaxed">
                    Laravel ekotizimida amaliy loyihalar tajribasiga ega Backend dasturchiman. Murakkab arxitekturali loyihalar, RESTful API ishlab chiqish hamda ma'lumotlar bazalari bilan ishlash bo'yicha mustahkam bilimga egaman.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Sun'iy intellekt (AI) vositalaridan foydalanib, kod yozish tezligini va sifatini oshiraman. Docker va CI/CD jarayonlarini avtomatlashtirish orqali development siklini qisqartirishga hissa qo'shaman.
                </p>
                
                <div class="pt-4">
                    <h4 class="font-semibold text-gray-800 mb-3">Tillar:</h4>
                    <div class="flex flex-wrap gap-3">
                        @foreach($portfolioConfig['languages'] as $lang)
                            <span class="px-4 py-2 bg-gray-100 rounded-lg text-sm font-medium text-gray-700 border border-gray-200">
                                {{ $lang['name'] }} <span class="text-blue-600 ml-1">({{ $lang['level'] }})</span>
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-6 animate-on-scroll">
                <div class="card p-6 text-center border-t-4 border-blue-500">
                    <i class="fas fa-server text-4xl text-blue-500 mb-3"></i>
                    <h4 class="font-bold text-xl">Backend</h4>
                    <p class="text-sm text-gray-500 mt-2">Laravel, PHP, REST API</p>
                </div>
                <div class="card p-6 text-center border-t-4 border-green-500">
                    <i class="fas fa-database text-4xl text-green-500 mb-3"></i>
                    <h4 class="font-bold text-xl">Database</h4>
                    <p class="text-sm text-gray-500 mt-2">MySQL, PostgreSQL</p>
                </div>
                <div class="card p-6 text-center border-t-4 border-purple-500">
                    <i class="fas fa-robot text-4xl text-purple-500 mb-3"></i>
                    <h4 class="font-bold text-xl">AI Integration</h4>
                    <p class="text-sm text-gray-500 mt-2">LLM, Agents, Automation</p>
                </div>
                <div class="card p-6 text-center border-t-4 border-orange-500">
                    <i class="fas fa-docker text-4xl text-orange-500 mb-3"></i>
                    <h4 class="font-bold text-xl">DevOps</h4>
                    <p class="text-sm text-gray-500 mt-2">Docker, Nginx, CI/CD</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Texnik Ko'nikmalar</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($skills as $category => $categorySkills)
            <div class="card p-8 animate-on-scroll hover:-translate-y-2 transition-transform duration-300">
                <h3 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                    @if($category == 'Backend') <i class="fas fa-code text-blue-600 mr-3"></i>
                    @elseif($category == 'Database') <i class="fas fa-database text-green-600 mr-3"></i>
                    @elseif($category == 'Frontend') <i class="fas fa-paint-brush text-purple-600 mr-3"></i>
                    @elseif($category == 'DevOps') <i class="fas fa-server text-orange-600 mr-3"></i>
                    @else <i class="fas fa-tools text-gray-600 mr-3"></i> @endif
                    {{ $category }}
                </h3>
                <div class="space-y-5">
                    @foreach($categorySkills as $skill)
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="font-medium text-gray-700">{{ $skill->name }}</span>
                            <span class="text-sm font-bold text-blue-600">{{ $skill->proficiency }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2.5 rounded-full transition-all duration-1000 ease-out" 
                                 style="width: 0%" data-width="{{ $skill->proficiency }}%"></div>
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
<section id="projects" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Tanlangan Loyihalar</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Quyida mening GitHub profilimdagi eng muhim va murakkab loyihalarim keltirilgan.</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <div class="card overflow-hidden group animate-on-scroll flex flex-col h-full">
                <div class="relative overflow-hidden h-48 bg-gray-100 flex items-center justify-center">
                    <!-- Loyiha uchun rasm bo'lmasa, ikonka ko'rsatiladi -->
                    <i class="fas fa-laptop-code text-6xl text-gray-300 group-hover:text-blue-500 transition-colors duration-300"></i>
                    
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                        @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-800 hover:text-blue-600 transform hover:scale-110 transition-all">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        @endif
                    </div>
                </div>
                
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-xl font-bold mb-3 text-gray-900 group-hover:text-blue-600 transition-colors">
                        {{ $project->title }}
                    </h3>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed flex-grow">
                        {{ $project->description }}
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mt-auto pt-4 border-t border-gray-100">
                        @foreach($project->technologies as $tech)
                        <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-md text-xs font-semibold border border-blue-100">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ $portfolioConfig['socials']['github'] }}" target="_blank" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors">
                Barcha loyihalarni GitHub'da ko'rish <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Experience & Education Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Tajriba va Ta'lim</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </div>
        
        <div class="max-w-4xl mx-auto">
            @if(isset($experiences['education']))
            <div class="mb-12 animate-on-scroll">
                <h3 class="text-2xl font-bold mb-8 flex items-center text-gray-800">
                    <i class="fas fa-graduation-cap text-blue-600 mr-3"></i> Ta'lim
                </h3>
                <div class="space-y-8">
                    @foreach($experiences['education'] as $exp)
                    <div class="relative pl-8 border-l-2 border-blue-200 pb-8 last:pb-0 last:border-0">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 bg-blue-600 rounded-full ring-4 ring-white"></div>
                        <div class="card p-6 ml-4">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                <h4 class="text-xl font-bold text-gray-900">{{ $exp->title }}</h4>
                                <span class="text-sm font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full mt-2 md:mt-0 w-fit">
                                    {{ $exp->start_date->format('Y') }} – {{ $exp->end_date ? $exp->end_date->format('Y') : 'Hozirgacha' }}
                                </span>
                            </div>
                            <p class="text-lg font-medium text-gray-700 mb-2">{{ $exp->company }}</p>
                            <p class="text-gray-600">{{ $exp->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            @if(isset($experiences['work']))
            <div class="animate-on-scroll">
                <h3 class="text-2xl font-bold mb-8 flex items-center text-gray-800">
                    <i class="fas fa-briefcase text-blue-600 mr-3"></i> Ish Tajribasi
                </h3>
                <div class="space-y-8">
                    @foreach($experiences['work'] as $exp)
                    <div class="relative pl-8 border-l-2 border-blue-200 pb-8 last:pb-0 last:border-0">
                        <div class="absolute -left-[9px] top-0 w-4 h-4 bg-green-500 rounded-full ring-4 ring-white"></div>
                        <div class="card p-6 ml-4">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-2">
                                <h4 class="text-xl font-bold text-gray-900">{{ $exp->title }}</h4>
                                <span class="text-sm font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full mt-2 md:mt-0 w-fit">
                                    {{ $exp->start_date->format('M Y') }} – {{ $exp->end_date ? $exp->end_date->format('M Y') : 'Hozirgacha' }}
                                </span>
                            </div>
                            <p class="text-lg font-medium text-gray-700 mb-2">{{ $exp->company }}</p>
                            <p class="text-gray-600">{{ $exp->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Bog'lanish</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-600">Hamkorlik yoki savollar uchun menga murojaat qiling.</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <div class="animate-on-scroll space-y-8">
                <div class="flex items-start">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mr-5 flex-shrink-0">
                        <i class="fas fa-envelope text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Email</h4>
                        <a href="mailto:{{ $portfolioConfig['contact']['email'] }}" class="text-gray-600 hover:text-blue-600 transition-colors">
                            {{ $portfolioConfig['contact']['email'] }}
                        </a>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mr-5 flex-shrink-0">
                        <i class="fas fa-phone-alt text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Telefon / Telegram</h4>
                        <p class="text-gray-600">{{ $portfolioConfig['contact']['phone'] }}</p>
                        <a href="{{ $portfolioConfig['socials']['telegram'] }}" target="_blank" class="text-blue-600 text-sm hover:underline">
                            Telegram orqali yozish
                        </a>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mr-5 flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-2xl text-purple-600"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-1">Manzil</h4>
                        <p class="text-gray-600">{{ $portfolioConfig['contact']['location'] }}</p>
                        <p class="text-sm text-gray-500 mt-1">Ish rejimi: To'liq kun / Ofis / Gibrid / Masofaviy</p>
                    </div>
                </div>
            </div>
            
            <div class="animate-on-scroll">
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                    <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST" class="card p-8 shadow-xl border border-gray-100">
                    @csrf
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Ismingiz</label>
                        <input type="text" name="name" required placeholder="Ism Familiya"
                               class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-500 focus:bg-white transition-colors">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Email manzilingiz</label>
                        <input type="email" name="email" required placeholder="example@mail.com"
                               class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-500 focus:bg-white transition-colors">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Xabar matni</label>
                        <textarea name="message" rows="4" required placeholder="Salom, men siz bilan..."
                                  class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-500 focus:bg-white transition-colors"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-full shadow-lg shadow-blue-500/30">
                        <i class="fas fa-paper-plane mr-2"></i>Xabarni yuborish
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Skill bars animation
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const width = bar.getAttribute('data-width');
                    bar.style.width = width;
                    observer.unobserve(bar);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('[data-width]').forEach(bar => {
            observer.observe(bar);
        });
    });
</script>
@endsection