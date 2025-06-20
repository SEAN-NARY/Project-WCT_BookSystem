<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run(): void
    {
$books = [
    // Story
    [
        'title' => 'Alice’s Adventures in Wonderland',
        'author' => 'Lewis Carroll',
        'description' => 'A fantastical tale of a young girl who falls through a rabbit hole into a whimsical, nonsensical world.',
        'cover_image' => 'books/Alice_in_Wonderland.jpg',
        'category_name' => 'Story',
    ],
    [
        'title' => 'The Jungle Book',
        'author' => 'Rudyard Kipling',
        'description' => 'A collection of fables about animals, featuring Mowgli, a boy raised by wolves in the jungle.',
        'cover_image' => 'books/The_Jungle_Book.jpg',
        'category_name' => 'Story',
    ],
    [
        'title' => 'The Adventures of Sherlock Holmes',
        'author' => 'Arthur Conan Doyle',
        'description' => 'Twelve thrilling detective stories featuring Sherlock Holmes and Dr. Watson.',
        'cover_image' => 'books/Adventures_of_sherlock_holmes.jpg',
        'category_name' => 'Story',
    ],
    [
        'title' => 'Peter Pan',
        'author' => 'J.M. Barrie',
        'description' => 'A magical adventure about the boy who never grows up and his adventures in Neverland.',
        'cover_image' => 'books/Peter_pan.jpeg',
        'category_name' => 'Story',
    ],

    // Education
    [
        'title' => 'The Elements of Style',
        'author' => 'William Strunk Jr.',
        'description' => 'A classic writing style guide focused on clarity and brevity in English grammar.',
        'cover_image' => 'books/The_Elements_of_Style.jpg',
        'category_name' => 'Education',
    ],
    [
        'title' => 'Introduction to Psychology',
        'author' => 'Charles Stangor',
        'description' => 'A modern introduction to psychology including brain function, perception, and behavior.',
        'cover_image' => 'books/Introduction_to_Psychology.jpeg',
        'category_name' => 'Education',
    ],
    [
        'title' => 'A First Book in Algebra',
        'author' => 'Wallace C. Boyden',
        'description' => 'A beginner’s guide to algebra with clear explanations and examples.',
        'cover_image' => 'books/A_First_Book_in_Algebra.jpg',
        'category_name' => 'Education',
    ],
    [
        'title' => 'How to Study',
        'author' => 'George Fillmore Swain',
        'description' => 'A motivational and practical guide for students on developing strong study habits.',
        'cover_image' => 'books/How_to_Study.webp',
        'category_name' => 'Education',
    ],

    // Romance
    [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'description' => 'A witty romantic novel exploring love and social standing through Elizabeth Bennet and Mr. Darcy.',
        'cover_image' => 'books/Pride_and_Prejudice.jpg',
        'category_name' => 'Romance',
    ],
    [
        'title' => 'Jane Eyre',
        'author' => 'Charlotte Brontë',
        'description' => 'An emotional story of a governess overcoming hardships and seeking love and independence.',
        'cover_image' => 'books/Jane_Eyre.jpg',
        'category_name' => 'Romance',
    ],
    [
        'title' => 'Persuasion',
        'author' => 'Jane Austen',
        'description' => 'A heartfelt story of second chances and enduring love between Anne Elliot and Captain Wentworth.',
        'cover_image' => 'books/Persuasion.jpg',
        'category_name' => 'Romance',
    ],
    [
        'title' => 'The Scarlet Pimpernel',
        'author' => 'Baroness Orczy',
        'description' => 'A thrilling romantic adventure set during the French Revolution.',
        'cover_image' => 'books/The_Scarlet_Pimpernel.jpg',
        'category_name' => 'Romance',
    ],

    // Mindset
    [
        'title' => 'As a Man Thinketh',
        'author' => 'James Allen',
        'description' => 'A short book about the power of thought and how it shapes our lives.',
        'cover_image' => 'books/As_a_Man_Thinkethjpg.jpg',
        'category_name' => 'Mindset',
    ],
    [
        'title' => 'The Power of Concentration',
        'author' => 'Theron Q. Dumont',
        'description' => 'Teaches how to train the mind to focus and achieve success.',
        'cover_image' => 'books/The_Power_of_Concentration.jpg',
        'category_name' => 'Mindset',
    ],
    [
        'title' => 'Think and Grow Rich',
        'author' => 'Napoleon Hill',
        'description' => 'A foundational book on personal development and wealth-building strategies.',
        'cover_image' => 'books/think_and_grow_rich.jpg',
        'category_name' => 'Mindset',
    ],
    [
        'title' => 'Your Invisible Power',
        'author' => 'Genevieve Behrend',
        'description' => 'Explores how imagination and belief can manifest one’s goals and desires.',
        'cover_image' => 'books/your_invisible_power.jpg',
        'category_name' => 'Mindset',
    ],
];


        foreach ($books as $data) {
            $category = Category::where('name', $data['category_name'])->first();

            if ($category) {
                Book::create([
                    'title' => $data['title'],
                    'author' => $data['author'],
                    'description' => $data['description'],
                    'cover_image' => $data['cover_image'],
                    'category_id' => $category->id, // Correct foreign key
                ]);
            }
        }
    }
}
