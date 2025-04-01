<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Calendar;
use App\Models\Category;
use App\Models\History;
use App\Models\PrincipalMessage;
use App\Models\Statement;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Branch::create([
            'branch_name' => 'SKT International School - Riverside Campus',
            'branch_short_name' => 'SKT-RC',
            'branch_location' => 'Thar Kay Ta',
        ]);
        Branch::create([
            'branch_name' => 'SKT International School - City Campus',
            'branch_short_name' => 'SKT-CC',
            'branch_location' => 'Bahan',
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'user_name' => 'kmk',
            'email' => 'khantminkyi@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1,
            'user_type' => 'admin',
            'branch_id' => 1,
            'phone' => '1123123413432',
            'gender' => 'male',
            'birth_date' => '199-06-28',

        ]);
        Category::create([
            'category_title' => 'School',
            'category_description' => 'School Category',
            'category_created_user_id' => 1,
        ]);
        PrincipalMessage::create([
            'principal_message_created_user_id' => 1,
            'principal_message_updated_user_id' => 1,
            'principal_message_branch_id' => 1,
            'principal_message' => 'Welcome to SKT International School Riverside Campus!
Our campus is home to a diverse community, with students representing over 25 different nationalities. This diversity enriches the learning experience and fosters global perspectives. Our dedicated academic team comprises both international and local teachers who expertly deliver the Cambridge, IB, and Myanmar curricula.
We take great pride in our school and its vibrant, inclusive community, and we are thrilled to welcome every student to be a part of it!',
            'principal_photo' => '/img/principal_data/SKT-RC/principal_photo_67e3bdc46d5595.92855943.jpg',
            'principal_name' => 'Aleksei Starodubtsev',
        ]);
        PrincipalMessage::create([
            'principal_message_created_user_id' => 1,
            'principal_message_updated_user_id' => 1,
            'principal_message_branch_id' => 2,
            'principal_message' => 'Dear Students, Parents, and Faculty,
Welcome to the SKT international City Campus, where we are proud to offer a high-quality
education following the Cambridge curriculum. Our school is committed to fostering academic
excellence, critical thinking, and personal growth in a nurturing and dynamic environment
We believe in a holistic approach to education, balancing rigorous academics with extracurricular
activities, international competitions, and character development programs. Our curriculum is
designed to provide a smooth progression from primary to secondary levels, ensuring students
are well-prepared for their future studies and careers.
Our dedicated and experienced teachers guide students through a challenging &amp; supportive
learning journey, encouraging them to become independent learners, problem solvers, and global
citizens.
Beyond academics, we emphasize values such as respect, integrity, and compassion. Our
students participate in various competitions, research projects, and leadership opportunities that
help shape their character and broaden their perspectives.
I invite you to explore our SKT City Campus community, where every student is valued,
challenged, and supported in their pursuit of excellence. Together, we can inspire a lifelong love
of learning and achievement!',
            'principal_photo' => '/img/principal_data/SKT-CC/principal_photo_67e3be318339b6.29521064.jpg',
            'principal_name' => 'Nazar Baltabaev',
        ]);

        History::create([
            'history_created_user_id' => 1,
            'history_updated_user_id' => 1,
            'history_branch_id' => 1,
            'history_body' => 'SKT International Riverside Campus was established in the year 2010, located on Shukhinthar Mayopat Road, Yangon. Situated in the heart of Yangon, our campus offers a convenient and accessible environment for students, parents, and educators. With modern facilities and a warm, welcoming atmosphere, we are committed to supporting both academic excellence and extracurricular development. Over the years, SKT has grown into a vibrant learning community, fostering strong connections among students, parents, and teachers. We take pride in providing a nurturing and dynamic environment where students can thrive and reach their full potential.
A warm welcome to all to SKT Riverside Campus!',
            'history_title' => 'History',
            'history_photo' => '/img/history_data/SKT-RC/history_photo_67e60515187459.68380796.png',
            'slug' => 'SKT-RC',
        ]);
        History::create([
            'history_created_user_id' => 1,
            'history_updated_user_id' => 1,
            'history_branch_id' => 2,
            'history_body' => 'SKT International City Campus was established in the year 2000, originally located on U Wisara Road before gradually moving to Po Sein Road, Bahan Township. Situated in the heart of Yangon, our campus offers a convenient and accessible environment for students, parents, and educators. With modern facilities and a warm, welcoming atmosphere, we are committed to supporting both academic excellence and extracurricular development. Over the years, SKT has grown into a vibrant learning community, fostering strong connections among students, parents, and teachers. We take pride in providing a nurturing and dynamic environment where students can thrive and reach their full potential.
A warm welcome to all to SKT City Campus!',
            'history_title' => 'History',
            'history_photo' => '/img/history_data/SKT-CC/history_photo_67e6051e39aba3.43338006.png',
            'slug' => 'SKT-CC',
        ]);
        Statement::create([
            'statement_created_user_id' => 1,
            'statement_updated_user_id' => 1,
            'statement_branch_id' => 1,
            'statement_photo' => '/img/statement_data/SKT-RC/statement_photo_67e3c0118424e3.57698644.png',
            'statement_vision' => '<p>We empower our students to join world class universities and become lifelong learners and compassionate global citizens.</p>',
            'statement_mission' => '<p>We nurture students to become lifelong learners responsible global citizens, and compassionate individuals through a challenging and balanced curriculum in a safe and caring environment.</p>',
            'statement_philosophy' => '<p>Our school philosophy revolves around five pillars, each representing a core aspect of our commitment to excellence and holistic development.</p>
<p><strong>Science and Mathematics: Building Foundations for Inquiry and Discovery</strong><br>Our curriculum is designed to ignite curiosity, encourage critical thinking, and instill a passion for inquiry-based learning. We empower our students to tackle real-world challenges and contribute meaningfully to a rapidly evolving global society.</p>
<p><strong>Technology Integration: Shaping Future Innovators</strong><br>Through a dynamic and evolving curriculum, we prepare our students to be adaptive, creative, and ethical users of technology, positioning them as leaders in an increasingly digital world.</p>
<p><strong>Physical Education - Sports, Games, and Events: Fostering Wellness and Team Spirit</strong><br>By fostering inclusivity and providing diverse opportunities for physical activity, we aim to instill a lifelong love for fitness, teamwork, and sportsmanship, nurturing well-rounded individuals who understand the importance of a healthy lifestyle.</p>
<p><strong>Internationalism: Cultivating Global Citizens</strong><br>We strive to create a global learning environment by incorporating international perspectives into our curriculum, promoting cultural exchange programs, and encouraging an appreciation for diversity.&nbsp;</p>
<p><strong>&nbsp;Character and Value Education: Shaping Ethical Leaders</strong><br>Our curriculum places a strong emphasis on the development of moral integrity, empathy, and resilience. We aim to cultivate ethical leaders who not only excel academically but also contribute positively to their communities, demonstrating a commitment to social responsibility.&nbsp;</p>',
            'slug' => 'SKT-RC',
        ]);
        Statement::create([
            'statement_created_user_id' => 1,
            'statement_updated_user_id' => 1,
            'statement_branch_id' => 2,
            'statement_photo' => '/img/statement_data/SKT-CC/statement_photo_67e3c019e9fef6.28635348.png',
            'statement_vision' => '<p>We nurture students to become lifelong learners responsible global citizens, and compassionate individuals through a challenging and balanced curriculum in a safe and caring environment.</p>',
            'statement_mission' => '<p>We nurture students to become lifelong learners responsible global citizens, and compassionate individuals through a challenging and balanced curriculum in a safe and caring environment.</p>',
            'statement_philosophy' => '<p>Our school philosophy revolves around five pillars, each representing a core aspect of our commitment to excellence and holistic development.</p>
<p><strong>Science and Mathematics: Building Foundations for Inquiry and Discovery</strong><br>Our curriculum is designed to ignite curiosity, encourage critical thinking, and instill a passion for inquiry-based learning. We empower our students to tackle real-world challenges and contribute meaningfully to a rapidly evolving global society.</p>
<p><strong>Technology Integration: Shaping Future Innovators</strong><br>Through a dynamic and evolving curriculum, we prepare our students to be adaptive, creative, and ethical users of technology, positioning them as leaders in an increasingly digital world.</p>
<p><strong>Physical Education - Sports, Games, and Events: Fostering Wellness and Team Spirit</strong><br>By fostering inclusivity and providing diverse opportunities for physical activity, we aim to instill a lifelong love for fitness, teamwork, and sportsmanship, nurturing well-rounded individuals who understand the importance of a healthy lifestyle.</p>
<p><strong>Internationalism: Cultivating Global Citizens</strong><br>We strive to create a global learning environment by incorporating international perspectives into our curriculum, promoting cultural exchange programs, and encouraging an appreciation for diversity.&nbsp;</p>
<p><strong>&nbsp;Character and Value Education: Shaping Ethical Leaders</strong><br>Our curriculum places a strong emphasis on the development of moral integrity, empathy, and resilience. We aim to cultivate ethical leaders who not only excel academically but also contribute positively to their communities, demonstrating a commitment to social responsibility.&nbsp;</p>',
            'slug' => 'SKT-CC',
        ]);
        Calendar::create([
            'calendar_created_user_id' => 1,
            'calendar_updated_user_id' => 1,
            'calendar_branch_id' => 1,
            'calendar_title' => 'SKT Riverside Campus Calendar 2024-2025',
            'calendar_photo' => '/img/calendar_data/SKT-RC/calendar_photo_67e12a1924b7c0.02258711.jpg',
        ]);
        Calendar::create([
            'calendar_created_user_id' => 1,
            'calendar_updated_user_id' => 1,
            'calendar_branch_id' => 2,
            'calendar_title' => 'SKT City Campus Calendar 2024-2025',
            'calendar_photo' => '/img/calendar_data/SKT-CC/calendar_photo_67e12a21a59df0.71355777.jpg',
        ]);
    }
}
