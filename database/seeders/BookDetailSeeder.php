<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookDetail;

class BookDetailSeeder extends Seeder
{
    public function run(): void
    {
        $bookDetails = [
            // Story
            [
                'book_id' => 1,
                'content' => 'A fantastical tale of a young girl who falls through a rabbit hole into a whimsical, nonsensical world.',
                'file_path' => 'https://www.gutenberg.org/files/11/11-h/11-h.htm',
            ],
            [
                'book_id' => 2,
                'content' => 'A collection of fables about animals, featuring Mowgli, a boy raised by wolves in the jungle.',
                'file_path' => 'https://www.gutenberg.org/files/236/236-h/236-h.htm',
            ],
            [
                'book_id' => 3,
                'content' => 'Twelve thrilling detective stories featuring Sherlock Holmes and Dr. Watson.',
                'file_path' => 'https://www.gutenberg.org/files/1661/1661-h/1661-h.htm',
            ],
            [
                'book_id' => 4,
                'content' => 'A magical adventure about the boy who never grows up and his adventures in Neverland.',
                'file_path' => 'https://www.gutenberg.org/files/16/16-h/16-h.htm',
            ],

            // Education
            [
                'book_id' => 5,
                'content' => 'A classic writing style guide focused on clarity and brevity in English grammar.',
                'file_path' => 'https://www.gutenberg.org/files/37134/37134-h/37134-h.htm',
            ],
            [
                'book_id' => 6,
                'content' => 'A modern introduction to psychology including brain function, perception, and behavior.',
                'file_path' => 'https://openstax.org/books/psychology/pages/1-introduction',
            ],
            [
                'book_id' => 7,
                'content' => 'A beginner’s guide to algebra with clear explanations and examples.',
                'file_path' => 'https://www.gutenberg.org/files/38439/38439-h/38439-h.htm',
            ],
            [
                'book_id' => 8,
                'content' => 'A motivational and practical guide for students on developing strong study habits.',
                'file_path' => 'https://www.gutenberg.org/files/27849/27849-h/27849-h.htm',
            ],

            // Romance
            [
                'book_id' => 9,
                'content' => 'A witty romantic novel exploring love and social standing through Elizabeth Bennet and Mr. Darcy.',
                'file_path' => 'https://www.gutenberg.org/files/1342/1342-h/1342-h.htm',
            ],
            [
                'book_id' => 10,
                'content' => 'An emotional story of a governess overcoming hardships and seeking love and independence.',
                'file_path' => 'https://www.gutenberg.org/files/1260/1260-h/1260-h.htm',
            ],
            [
                'book_id' => 11,
                'content' => 'A heartfelt story of second chances and enduring love between Anne Elliot and Captain Wentworth.',
                'file_path' => 'https://www.gutenberg.org/files/105/105-h/105-h.htm',
            ],
            [
                'book_id' => 12,
                'content' => 'A thrilling romantic adventure set during the French Revolution.',
                'file_path' => 'https://www.gutenberg.org/files/60/60-h/60-h.htm',
            ],

            // Mindset
            [
                'book_id' => 13,
                'content' => 'A short book about the power of thought and how it shapes our lives.',
                'file_path' => 'https://www.gutenberg.org/files/4507/4507-h/4507-h.htm',
            ],
            [
                'book_id' => 14,
                'content' => 'Teaches how to train the mind to focus and achieve success.',
                'file_path' => 'https://www.gutenberg.org/files/1570/1570-h/1570-h.htm',
            ],
            [
                'book_id' => 15,
                'content' => 'A foundational book on personal development and wealth-building strategies.',
                'file_path' => 'https://archive.org/details/Think_and_Grow_Rich',
            ],
            [
                'book_id' => 16,
                'content' => 'Explores how imagination and belief can manifest one’s goals and desires.',
                'file_path' => 'https://www.gutenberg.org/files/61626/61626-h/61626-h.htm',
            ],
        ];

        foreach ($bookDetails as $detail) {
            BookDetail::create($detail);
        }
    }
}
