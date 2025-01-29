<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'urlPhoto' => $this->generateRandomImage(),
        ];
    }

    /**
     * Генерация случайного изображения и возврат его локального пути
     *
     * @return string
     */
    public function generateRandomImage()
    {
        // Название файла и путь
        $fileName = 'image_' . uniqid() . '.jpg';
        $filePath = 'uploads/' . $fileName;

        // Создание изображения с помощью GD
        $image = imagecreatetruecolor(640, 480);
        $color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
        imagefill($image, 0, 0, $color);

        // Сохранение изображения
        imagejpeg($image, storage_path('app/public/' . $filePath));
        imagedestroy($image);

        // Возвращаем путь для базы данных
        return Storage::url($filePath);
    }
}
