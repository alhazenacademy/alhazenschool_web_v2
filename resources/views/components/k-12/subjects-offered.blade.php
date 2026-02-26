@props([
    'subjectCards' => []
])

<section id="k-12-subjects-offered" class="relative overflow-hidden py-12 lg:py-20">
    <div class="relative mx-auto max-w-7xl px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-5">
                <span
                    class="inline-flex items-center px-3 py-1 text-small font-medium rounded-full border border-primary text-primary">
                    Subjects Offered
                </span>
            </div>

            <h2 class="text-h2 font-bold italic leading-tight mb-5">
                A Comprehensive Range of Subjects
            </h2>

            <p class="text-body-large">
                We offer a well-rounded selection of subjects designed to support students’ academic development,
                strengthen Islamic character, and build essential skills for lifelong learning through a balanced
                and structured curriculum.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($subjectCards as $item)
                <div class="{{ $item['bg'] }} text-background shadow-xl rounded-3xl py-5 pl-4 pr-6 min-h-[300px]">
                    <div class="flex gap-3">
                        <div>
                            <span
                                class="flex items-center justify-center w-6 h-6 mb-3 rounded-full bg-background {{ $item['color'] }}">
                                <h5 class="text-h5 font-bold">
                                    {{ $item['number'] }}
                                </h5>
                            </span>
                        </div>
                        <div class="flex-1">
                            <h5 class="text-h5 font-bold mb-3">
                                {{ $item['title'] }}
                            </h5>
                            <p class="text-sm text-justify">
                                {{ $item['description'] }}
                            </p>
                            <hr class="my-3">
                            <ul class="list-disc pl-5 space-y-2 text-sm mb-5">
                                @foreach ($item['list'] as $listItem)
                                    <li>{{ $listItem }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
