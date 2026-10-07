@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <section class="py-20 bg-gray-50 min-h-screen">
        <div class="container mx-auto px-6">
            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ route('projects') }}"
                    class="inline-flex items-center text-gray-600 hover:text-blue-600 transition-colors font-medium">
                    <i class="fas fa-arrow-left mr-2"></i> Barcha loyihalarga qaytish
                </a>
            </div>

            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <div class="card p-8 border border-gray-100">
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $project->title }}</h1>

                        <!-- Tech Stack Badges -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            @if (is_array($project->technologies))
                                @foreach ($project->technologies as $tech)
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            @endif
                        </div>

                        <div class="prose prose-blue max-w-none text-gray-600 leading-relaxed">
                            <p>{{ $project->description }}</p>
                            <!-- Agar kelajakda description HTML bo'lsa {!! $project->description !!} ishlating -->
                        </div>
                    </div>

                    <!-- Features / Details Section (Optional) -->
                    <div class="card p-8 border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <i class="fas fa-list-check text-blue-600 mr-3"></i> Asosiy xususiyatlar
                        </h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <span>Murakkab biznes logika va validatsiya tizimi</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <span>To'liq responsive dizayn va foydalanuvchi tajribasi</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <span>Xavfsizlik standartlariga rioya qilingan</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Action Card -->
                    <div class="card p-6 border border-gray-100 sticky top-24">
                        <h3 class="font-bold text-gray-900 mb-4">Loyiha havolalari</h3>

                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank"
                                class="flex items-center justify-center w-full bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3 px-4 rounded-lg transition-colors mb-3">
                                <i class="fab fa-github mr-2 text-xl"></i> Kodni ko'rish (GitHub)
                            </a>
                        @endif

                        @if ($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank"
                                class="flex items-center justify-center w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Demo
                            </a>
                        @else
                            <button disabled
                                class="flex items-center justify-center w-full bg-gray-200 text-gray-500 font-semibold py-3 px-4 rounded-lg cursor-not-allowed">
                                <i class="fas fa-lock mr-2"></i> Demo mavjud emas
                            </button>
                        @endif

                        <p class="text-xs text-gray-500 text-center mt-4">
                            Bu loyiha ochiq manbali hisoblanadi.
                        </p>
                    </div>

                    <!-- Quick Info -->
                    <div class="card p-6 border border-gray-100">
                        <h4 class="font-bold text-gray-900 mb-3 text-sm uppercase tracking-wide">Texnologiyalar</h4>
                        <div class="flex flex-wrap gap-2">
                            @if (is_array($project->technologies))
                                @foreach ($project->technologies as $tech)
                                    <span
                                        class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded border border-gray-200">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
