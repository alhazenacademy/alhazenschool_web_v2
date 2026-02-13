@props([
    'assesments' => [
        [
            'bg' => 'additional-blue',
            'image' => 'assets/kids/primary-school/learning-method-img.webp',
            'title' => 'Discussion <br> Method',
            'title_plain' => 'Discussion Method',
            'subtitle' => 'Discussion Method',
            'description' => 'This method encourages students to actively participate in learning through guided discussions. Students are trained to express ideas, ask questions, and develop critical thinking skills while working together to solve problems.',
        ],
        [
            'bg' => 'additional-orange',
            'image' => 'assets/kids/primary-school/learning-method-img.webp',
            'title' => 'Game Based <br> Learning',
            'title_plain' => 'Game Based Learning',
            'subtitle' => 'Learning Through Play',
            'description' => 'Teachers use educational games such as quizzes, puzzles, and role-playing activities to make learning more engaging. This approach helps students understand concepts better while maintaining motivation and enjoyment during lessons.',
        ],
        [
            'bg' => 'additional-purple',
            'image' => 'assets/kids/primary-school/learning-method-img.webp',
            'title' => 'Project Based <br> Learning',
            'title_plain' => 'Project Based Learning',
            'subtitle' => 'Collaborative Exploration',
            'description' => 'Students work collaboratively on projects that require problem-solving, critical and analytical thinking, and the use of relevant learning resources. This method helps students apply knowledge in real-life contexts and develop teamwork skills.',
        ],
    ],
])

<section id="primary-school-learning-method" class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Learning Method
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                A Thoughtful Approach to Learning
            </h2>

            <p class="text-body-large">
                Our learning methods combine structured guidance, interactive sessions, and independent practice to support academic growth, character development, and adaptable learning experiences.
            </p>
        </div>

        <!-- Curriculum Cards -->
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($assesments as $item)
                <div class="{{ $item['bg'] }} text-white rounded-3xl shadow-xl p-6 pb-12 flex flex-col">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title_plain'] }}"
                        class="rounded-2xl mb-6 w-full h-[150px] object-cover brightness-70">

                    <h4 class="text-h4 font-bold mb-1">
                        {!! $item['title'] !!}
                    </h4>

                    <p class="text-sm opacity-90 mb-4">
                        {{ $item['subtitle'] }}
                    </p>

                    <p class="text-body leading-relaxed text-justify">
                        {{ $item['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
