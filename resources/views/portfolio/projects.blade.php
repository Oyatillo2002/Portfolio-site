@extends('layouts.app')

@section('title', 'Barcha Loyihalar')

@section('content')
    <!-- Page Header -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Mening Barcha Loyihalarim</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Quyida mening GitHub profilimdagi barcha ochiq manbali loyihalarim keltirilgan.
                Har bir loyiha haqida batafsil ma'lumot olish uchun ustiga bosing.
            </p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-12 bg-white min-h-screen">
        <div class="container mx-auto px-6">
            @if ($projects->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($projects as $project)
                        <div
                            class="card overflow-hidden group animate-on-scroll flex flex-col h-full border border-gray-100 hover:border-blue-200 transition-colors duration-300">
                            <!-- Project Image Placeholder -->
                            <div
                                class="relative overflow-hidden h-48 bg-gradient-to-br from-blue-50 to-indigo-50 flex items-center justify-center">
                                <i
                                    class="fas fa-laptop-code text-6xl text-blue-200 group-hover:text-blue-500 transition-colors duration-300 transform group-hover:scale-110"></i>

                                <!-- Hover Overlay -->
                                <div
                                    class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4 backdrop-blur-sm">
                                    @if ($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank"
                                            class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-800 hover:text-blue-600 transform hover:scale-110 transition-all shadow-lg"
                                            title="GitHub Repository">
                                            <i class="fab fa-github text-xl"></i>
                                        </a>
                                    @endif
                                    <a href="{{ route('project.show', $project) }}"
                                        class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transform hover:scale-110 transition-all shadow-lg"
                                        title="Batafsil ko'rish">
                                        <i class="fas fa-eye text-xl"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6 flex-grow flex flex-col">
                                <h3
                                    class="text-xl font-bold mb-3 text-gray-900 group-hover:text-blue-600 transition-colors">
                                    {{ $project->title }}
                                </h3>
                                <p class="text-gray-600 mb-4 text-sm leading-relaxed flex-grow">
                                    {{ Str::limit($project->description, 120) }}
                                </p>

                                <!-- Technologies Tags -->
                                <div class="flex flex-wrap gap-2 mt-auto pt-4 border-t border-gray-100">
                                    @if (is_array($project->technologies))
                                        @foreach ($project->technologies as $tech)
                                            <span
                                                class="bg-blue-50 text-blue-700 px-3 py-1 rounded-md text-xs font-semibold border border-blue-100">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20">
                    <i class="fas fa-folder-open text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-600">Hozircha loyihalar mavjud emas</h3>
                    <p class="text-gray-500 mt-2">Tez orada yangi loyihalar qo'shiladi.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
