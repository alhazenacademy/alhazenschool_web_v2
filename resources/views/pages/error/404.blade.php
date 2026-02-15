<x-layout
    title="404 — Page Not Found | Alhazen School"
    description="The page you are looking for was not found."
    wa-message="Hi, I found a 404 page on Alhazen School Web."
    :sales-phone="$salesPhone ?? null"
>
    <x-error.error-page
        code="404"
        title="Oops! Page not found."
        subtitle="The link you are opening is not available or has been moved."
        buttonText="Back to Home"
        :buttonHref="route('home', absolute: false)"
        :image="asset('assets/kids/error/img-404.webp')"
        imageAlt="404 Not Found"
        note="Double check the URL to make sure there are no typos."
    />
</x-layout>
