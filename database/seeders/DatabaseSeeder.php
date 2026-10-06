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
        // Skills
        $skills = [
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 90, 'order' => 1],
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 85, 'order' => 2],
            ['name' => 'MySQL', 'category' => 'Backend', 'proficiency' => 80, 'order' => 3],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'proficiency' => 85, 'order' => 1],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 90, 'order' => 2],
            ['name' => 'TailwindCSS', 'category' => 'Frontend', 'proficiency' => 85, 'order' => 3],
            ['name' => 'HTML/CSS', 'category' => 'Frontend', 'proficiency' => 95, 'order' => 4],
            ['name' => 'Git', 'category' => 'Tools', 'proficiency' => 85, 'order' => 1],
            ['name' => 'Docker', 'category' => 'Tools', 'proficiency' => 75, 'order' => 2],
            ['name' => 'Linux', 'category' => 'Tools', 'proficiency' => 80, 'order' => 3],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // Projects
        $projects = [
            [
                'title' => 'E-commerce Platform',
                'slug' => 'ecommerce-platform',
                'description' => 'Laravel va Vue.js yordamida yaratilgan to\'liq funksional e-commerce platforma. To\'lov tizimi, admin panel va foydalanuvchi boshqaruvi mavjud.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'TailwindCSS'],
                'featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Task Management App',
                'slug' => 'task-management-app',
                'description' => 'Jamoaviy loyihalar uchun task boshqaruv tizimi. Real-time yangilanishlar, bildirimlar va hisobotlar.',
                'technologies' => ['Laravel', 'Vue.js', 'WebSocket'],
                'featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Blog Platform',
                'slug' => 'blog-platform',
                'description' => 'SEO-optimallashtirilgan blog platformasi. Markdown qo\'llab-quvvatlash, kommentariyalar va ijtimoiy ulashish.',
                'technologies' => ['Laravel', 'MySQL', 'TailwindCSS'],
                'featured' => true,
                'order' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // Experiences
        $experiences = [
            [
                'type' => 'work',
                'title' => 'Senior Full-Stack Developer',
                'company' => 'Tech Company LLC',
                'start_date' => '2023-01-01',
                'description' => 'Laravel va Vue.js yordamida yirik loyihalarni ishlab chiqish. Jamoa boshqaruvi va mentorlik.',
                'order' => 1,
            ],
            [
                'type' => 'work',
                'title' => 'Full-Stack Developer',
                'company' => 'Digital Agency',
                'start_date' => '2021-06-01',
                'end_date' => '2022-12-31',
                'description' => 'Mijozlar uchun web ilovalar yaratish. Backend va frontend ishlab chiqish.',
                'order' => 2,
            ],
            [
                'type' => 'education',
                'title' => 'Kompyuter Fanlari Bakalavri',
                'company' => 'Toshkent Davlat Texnika Universiteti',
                'start_date' => '2017-09-01',
                'end_date' => '2021-06-30',
                'description' => 'Dasturlash, ma\'lumotlar bazasi va web texnologiyalar',
                'order' => 1,
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::create($exp);
        }
    }
}