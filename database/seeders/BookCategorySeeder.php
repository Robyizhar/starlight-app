<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookCategory;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookCategory::insert([
            [
                'id' => 1,
                'name' => 'Fiksi Ilmiah (Science Fiction)',
                'description' => 'Berfokus pada spekulasi ilmiah dan teknologi, sering kali berlatar masa depan atau di luar angkasa. Contohnya adalah cerita tentang perjalanan waktu, kecerdasan buatan, atau kehidupan di planet lain.',
            ],
            [
                'id' => 2,
                'name' => 'Fantasi',
                'description' => 'Mengandung elemen magis, dunia fiktif, atau makhluk mitologis yang tidak ada dalam kehidupan nyata. Novel fantasi sering kali memiliki dunia yang kompleks dan aturan magis tertentu.',
            ],
            [
                'id' => 3,
                'name' => 'Romansa',
                'description' => 'Berfokus pada hubungan cinta antara karakter utama. Cerita sering kali melibatkan konflik emosional dan tantangan dalam hubungan.',
            ],
            [
                'id' => 4,
                'name' => 'Thriller dan Misteri',
                'description' => 'Mengandung elemen ketegangan dan teka-teki, sering kali melibatkan penyelidikan kriminal atau kejadian yang memicu adrenalin.',
            ],
            [
                'id' => 5,
                'name' => 'Horor',
                'description' => 'Bertujuan untuk menakuti atau menciptakan suasana mencekam. Ceritanya sering kali melibatkan makhluk supernatural atau situasi yang menakutkan.',
            ],
            [
                'id' => 6,
                'name' => 'Drama atau Fiksi Realistik',
                'description' => 'Menggambarkan kehidupan sehari-hari dengan karakter yang realistis dan cerita yang berfokus pada pengalaman manusia, emosi, dan konflik.',
            ],
            [
                'id' => 7,
                'name' => 'Sejarah (Historical Fiction)',
                'description' => 'Berlatar pada periode waktu tertentu dalam sejarah, dengan latar belakang budaya, politik, atau peristiwa sejarah yang signifikan.',
            ],
            [
                'id' => 8,
                'name' => 'Petualangan',
                'description' => 'Berisi aksi dan perjalanan yang menantang atau berbahaya, dengan karakter yang sering kali menghadapi tantangan fisik dan alam.',
            ],
            [
                'id' => 9,
                'name' => 'Dystopia/Utopia',
                'description' => 'Menggambarkan dunia masa depan dengan kondisi sosial, politik, atau lingkungan yang ekstrem, baik dalam bentuk ideal (utopia) atau penuh kekacauan dan penindasan (dystopia).',
            ],
            [
                'id' => 10,
                'name' => 'Fiksi Anak dan Remaja',
                'description' => 'Ditujukan untuk pembaca muda dengan tema-tema yang relevan bagi mereka, seperti persahabatan, identitas, dan pertumbuhan.',
            ],
        ]);
    }
}
