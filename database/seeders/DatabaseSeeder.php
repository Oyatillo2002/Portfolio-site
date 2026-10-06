<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // --- KO'NIKMALAR (SKILLS) ---
        $skills = [
            // Backend
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 90],
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 95],
            ['name' => 'REST API', 'category' => 'Backend', 'proficiency' => 90],
            
            // Database
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency' => 85],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'proficiency' => 80],
            
            // Frontend & Tools
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 75],
            ['name' => 'TailwindCSS', 'category' => 'Frontend', 'proficiency' => 80],
            ['name' => 'Bootstrap', 'category' => 'Frontend', 'proficiency' => 85],
            
            // DevOps & AI
            ['name' => 'Docker', 'category' => 'DevOps', 'proficiency' => 80],
            ['name' => 'Nginx', 'category' => 'DevOps', 'proficiency' => 75],
            ['name' => 'Git & GitHub', 'category' => 'Tools', 'proficiency' => 90],
            ['name' => 'AI Integration', 'category' => 'AI', 'proficiency' => 85],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(['name' => $skill['name']], $skill);
        }

        // --- LOYIHALAR (PROJECTS) ---
        $projects = [
            [
                'title' => 'E-Commerce Backend API',
                'slug' => 'ecommerce-backend-api',
                'description' => 'Onlayn do\'kon loyihasining to\'liq backend qismi. 50+ RESTful API endpointlari, murakkab biznes logika va Docker orqali deployment.',
                'technologies' => ['Laravel', 'REST API', 'MySQL', 'Docker'],
                'github_url' => 'https://github.com/Oyatillo2002/Ecommerce-backend',
                'featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Qayta Aloqa So\'rovlari Tizimi',
                'slug' => 'feedback-system',
                'description' => 'Mijozlar uchun onlayn ariza qoldirish tizimi. Rol-based autentifikatsiya (Mijoz/Manager) va admin panel.',
                'technologies' => ['Laravel', 'MySQL', 'TailwindCSS'],
                'github_url' => 'https://github.com/Oyatillo2002/laravel-task',
                'featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Blog Platformasi',
                'slug' => 'blog-platform',
                'description' => 'To\'liq funksional blog. Ro\'yxatdan o\'tish, maqolalar, sharhlar va kontent boshqaruvi.',
                'technologies' => ['Laravel', 'Bootstrap', 'MySQL'],
                'github_url' => 'https://github.com/Oyatillo2002/Laravel-blog-site',
                'featured' => true,
                'order' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(['slug' => $project['slug']], $project);
        }

        // --- TAJRIBA VA TA'LIM (EXPERIENCE) ---
        $experiences = [
            [
                'type' => 'education',
                'title' => 'Muhandis-dasturchi (Informatika)',
                'company' => 'Namangan Davlat Universiteti',
                'start_date' => '2020-09-01',
                'end_date' => '2024-06-30',
                'description' => 'Bakalavr darajasi. Dasturlash algoritmlari va ma\'lumotlar tuzilmasi.',
                'order' => 1,
            ],
            // Agar ish tajribangiz bo'lsa, shu yerga qo'shasiz. Hozircha "Freelance" yoki "Pet Projects" deb qoldirish mumkin
            [
                'type' => 'work',
                'title' => 'Backend Developer (Pet Projects & Freelance)',
                'company' => 'Mustaqil Faoliyat',
                'start_date' => '2023-01-01',
                'description' => 'Laravel ekotizimida turli xil web ilovalar va API lar yaratish. Docker va CI/CD jarayonlarini o\'rganish va tatbiq etish.',
                'order' => 2,
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::updateOrCreate([
                'title' => $exp['title'], 
                'company' => $exp['company']
            ], $exp);
        }
    }
}